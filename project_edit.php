<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* This file is part of "TaskFreak! multi user" program.                      *
*                                                                            *
* TaskFreak! multi user is free software; you can redistribute it and/or     *
* modify it under the terms of the GNU General Public License as published   *
* by the Free Software Foundation; either version 2 of the License, or (at   *  
* your option) any later version.                                            *
*                                                                            *
* TaskFreak! multi user is distributed in the hope that it will be           *
* useful, but WITHOUT ANY WARRANTY; without even the implied warranty of     *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
* GNU General Public License for more details.                               *
*                                                                            *
* You should have received a copy of the GNU General Public License          *
* along with this program; if not, write to the Free Software                *
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA *
\****************************************************************************/

include '_common.php';

/* --- INIT ----------------------------------------------------------- */

$objEditItem = new ProjectStats();
$objEditItem->initObjectProperties();

$pTitle = 'Edit project';
$pButton = $langForm['save'];

$pUserCanManage = false;    // can(not) manage project's member
$pUserCanStatus = false;    // can(not) change project status
$pUserCanEdit = false;      // can(not) edit project details
$pUserCanDelete = false;    // can(not) delete project

$pUserPosition = 0;         // current user's position


/* --- LOAD PROJECT --------------------------------------------------- */

if ($_REQUEST['id']) {

	// admin loads specific project
	$objEditItem->setUid($_REQUEST['id']);
	if (!$objEditItem->load($objUser->id,false)) {
		Tzn::redirect('project_list.php','ERROR:'.$langMessage['not_found_or_denied'].' (error #424)');
	} else if ($objUser->checkLevel(8)) {
        // user can edit/manage any project (admin)
        $pUserCanManage = true;
        $pUserCanStatus = true;
        $pUserCanEdit = true;
        $pUserCanDelete = true;
        $pUserPosition = FRK_PROJECT_LEADER+1;
    } else {
		// check that user is leader or moderator
		$objMemberProject = new MemberProject();
		if ($objMemberProject->loadPosition($objEditItem->id,$objUser->id))
        {
            $pUserCanManage = $objMemberProject->checkRights(11);
            $pUserCanStatus = $objMemberProject->checkRights(12);
            $pUserCanEdit = $objMemberProject->checkRights(13);
            $pUserCanDelete = $objMemberProject->checkRights(14);
            $pUserPosition = $objMemberProject->position;
        } else if (!$objUser->checkLevel(10)) {
            Tzn::redirect('project_list.php','ERROR:'.$langMessage['not_found_or_denied']);
        }
	}
	
} else {

	$pTitle = 'Create new project';
	$pButton = $langForm['create'];

    $pUserCanEdit=true;
    $pUserCanStatus=true;

}

/* --- MANAGE PROJECT'S MEMBERS -------------------------------------- */

if ($pUserCanManage) {

	// --- remove user from project ---
	
	if ($_REQUEST['delete']) {
		$objMemberTeam = new MemberProject();
		$objMemberTeam->initObjectProperties();
		$objMemberTeam->project->id = $objEditItem->id;
		$objMemberTeam->member->setUid($_REQUEST['delete']);
		if ($objMemberTeam->delete()) {
			$pMessageEditStatus = $langProject['user_removed_ok'];
		} else {
			$pMessageError = $langProject['user_removed_err'];
		}
	}

    // --- add new user to project ---

    if ($_POST['invite']) {
        $objMemberTeam = new MemberProject();
        $objMemberTeam->initObjectProperties();
		$objMemberTeam->project->id = $objEditItem->id;
		$objMemberTeam->member->setUid($_REQUEST['nuser']);
        $objMemberTeam->set('position',$_REQUEST['nposition']);
        if ($objMemberTeam->add()) {
            $pMessageEditStatus = $langProject['user_added_ok'];
        } else {
            $pMessageError = $langProject['user_added_err'];
        }
    }
	
	// --- update position ---
	
	foreach ($_REQUEST as $key => $value) {
		if (ereg('^position-',$key)) {
			$id = intval(substr($key,9));
			if ($id != $objUser->id || $pUserIsAdmin) {
				// can not change own position
				$objMemberTeam = new MemberProject();
				if ($objMemberTeam->loadPosition($objEditItem->id,$id))
				{
					if ($objMemberTeam->position != $value) {
						// update database
						$objMemberTeam->position = $value;
						$objMemberTeam->getConnection();
						$objMemberTeam->update('position');
                        $pMessageEditStatus = $langProject['user_position_ok'];
					}
				}
			}
		}
	}

    if ($pMessageEditStatus) {
        Tzn::redirect('project_edit.php?id='.$objEditItem->id,$pMessageEditStatus);
    }

}

/* --- SAVE PROJECT INFO ---------------------------------------------- */

if ($_POST['submit']) {
    // --- save general info ---
    if ($pUserCanEdit) {
        $objEditItem->setAuto($_POST);
        if ($objEditItem->check()) { // register form is valid
            if ($objEditItem->isLoaded()) {
                // --- save project status ---
                if ($pUserCanStatus && !$pMessageError && $_POST['status'] != $objEditItem->projectStatus->statusKey) {
                    $objEditItem->setStatus($_POST['status'],$objUser->id);
                    $pMessageStatus = $GLOBALS['langProject']['action_status_ok'];
                } else {
                    $pMessageStatus = $GLOBALS['langProject']['action_save_ok'];
                }
                $objEditItem->update();
            } else if ($objEditItem->add($_POST['status'],$objUser->id)) { // add in DB
                $pMessageStatus = $GLOBALS['langProject']['action_added_ok'];
            }
        } else {
    		$pMessageError = $GLOBALS['langTznCommon']['form_error'];
        }
	}

}

// redirect on successful update
if ($pMessageStatus) {
    Tzn::redirect('project_list.php',$pMessageStatus);
}

/* --- LOAD TEAM MEMBERS --------------------------------------------- */

$objMemberList = new MemberProject();
if ($objEditItem->isLoaded()) {
    $objMemberList->addWhere($objMemberList->gTable().'.projectId = '.$objEditItem->id);
    $objMemberList->addOrder('position DESC, firstName ASC');
    $objMemberList->loadList();
}

/* --- LOAD STATUS CHANGE HISTORY ------------------------------------- */

$objStatusHistory = new ProjectStatus();
if ($objEditItem->id) {
    $objStatusHistory->addWhere('projectId = '.$objEditItem->id);
    $objStatusHistory->addOrder('statusDate');
    $objStatusHistory->loadList();
}

/* --- LOAD OTHER USERS ----------------------------------------------- */

$objOtherUserList = new Member();
if ($objEditItem->isLoaded()) {
    $objOtherUserList->loadNonMemberList($objEditItem->id);
}

/* --- LOAD PROJECT STATUS -------------------------------------------- */

$objStatusList = new ProjectStatusList();

/* --- LOAD PROJECT POSITIONS ----------------------------------------- */

$objPositionList = new ProjectPositionList($pUserPosition);

/* --- HTML ----------------------------------------------------------- */

$pJScript = 'team.js';

include PRJ_INCLUDE_PATH.'html/header.php';
?>
<div align="center">
  <div id="horiz" style="width:600px">
	<?php
	if ($pMessageError) {
		echo '<p class="box redish">'.$pMessageError.'</p>';
	}
	?>
	<form action="project_edit.php" method="post">
	<?php $objEditItem->qHidden('id'); ?>
    <fieldset>
		<legend><?php echo $langProject['project_info']; ?></legend>
        <?php
            if ($pUserCanEdit) {
                echo '<p>'.$langForm['compulsory_legend'].'</p>';
            }
        ?>
		<table cellpadding="2" cellspacing="1" border="0" class="form">
			<tr>
				<th width="100"><span class="compulsory"><?php echo $langProject['name']; ?></span>:</th>
				<td>
                <?php
                    if ($pUserCanEdit) {
                        $objEditItem->qText('name','','width:400px'); 
                    } else {
                        echo '<big>'.$objEditItem->get('name').'</big>';
                    }
                ?>
                </td>
			</tr>
			<tr valign="top">
				<th><?php echo $langProject['description']; ?>:</th>
				<td><?php
                    if ($pUserCanEdit) {
                        $objEditItem->qTextArea('description','','width:400px;height:60px');
                    } else {
                        $objEditItem->p('description','-');
                    }
                ?></td>
			</tr>
			<tr>
				<th><?php echo $langProject['status']; ?>:</th>
				<td>
                <?php
                    if ($pUserCanStatus) {
    					$objStatusList->qSelect('status',$objEditItem->projectStatus->statusKey,'','width:150px'); 
                        if ($objEditItem->id) {
                            echo ' <a href="javascript:tD(gE(\'status_history\'))" class="small">&gt; '.$langProject['project_history'].'</a>';
                        }
                    } else {
                ?>
                    <a href="javascript:tD(gE('status_history'))"><?php echo $langProjectStatus[$objEditItem->projectStatus->statusKey]; ?></a>
                <?php
                    }
				?></a>
				</td>
			</tr>
		</table>
        <?php
            if ($objEditItem->id) {
        ?>
        <div id="status_history" style="display:none">
            <table cellpadding="2" cellspacing="1" border="0" width="60%" class="sheet">
                <tr>
                    <th><?php echo $langProject['history_date']; ?></th>
                    <th><?php echo $langProject['history_what']; ?></th>
                    <th><?php echo $langProject['history_user']; ?></th>
                </tr>
        <?php
                while ($objTmp=$objStatusHistory->rNext()) {
        ?>
                <tr>
                    <td><?php echo $objTmp->getDte('statusDate','SHT'); ?></td>
                    <td><?php echo $objTmp->getStatus(); ?></td>
                    <td><?php echo $objTmp->member->getShortName(); ?></td>
                </tr>
        <?php
                }
        ?>
            </table>
        </div>
        <?php
            }
        ?>
        <div style="margin-top:12px">
        <?php
            if ($pUserCanEdit || $pUserCanStatus) {
        ?>
            <div style="float:left">
                <input type="submit" name="submit" value="<?php echo $pButton; ?>" /> &nbsp; <input type="reset" value="<?php echo $langForm['reset']; ?>" />
            </div>
        <?php
            }
        ?>
            <input type="button" value="<?php echo $langButton['back']; ?>" onClick="window.location.href='project_list.php'" style="float:right"/>
            <div style="clear:both"></div>
        </div>
	</fieldset><br />
	</form>
<?php
    if ($objEditItem->isLoaded()) {
?>
    <form action="project_edit.php" method="post">
    <fieldset>
		<legend><?php echo $langProject['members_legend']; ?></legend>
		<?php
            echo $objEditItem->qHidden('id');

            $objPositionList->pJSarray();

            if ($pUserCanManage && $objOtherUserList->rMore()) { 
                // user has rights to edit/delete users
        ?>
        <p><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/bullet.png" /> <a href="javascript:tD(gE('invitation'))"><?php echo $langProject['user_add_legend']; ?></a></p>
        <div id="invitation" style="display:none">
            <fieldset style="margin-bottom: 20px">
                <table cellspacing="0" cellpadding="3" border="0" class="form">
                    <tr>
                        <th><?php echo $langUser['user']; ?>:</th>
                        <td><?php $objOtherUserList->qSelect('nuser','getName()','',($objOtherUserList->rCount()==1)?'':'- select user -'); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $langProject['position']; ?>:</th>
                        <td><?php
                            $objPositionList->qSelect('nposition');
                        ?></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td><input type="submit" name="invite" value="<?php echo $langProject['user_add_button']; ?>" /></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <?php
            }
        ?>
		<table cellspacing="0" cellpadding="3" border="0" width="100%" class="data">
			<thead>
				<tr align="left">
					<th width="<?php echo ($pUserCanManage)?'40':'45'; ?>%"><?php echo $langUser['name']; ?></th>
					<th width="<?php echo ($pUserCanManage)?'35':'40'; ?>%"><?php echo $langUser['location']; ?></th>
					<th width="15%"><?php echo $langProject['position']; ?></th>
					<?php 
						if ($pUserCanManage) { 
							// user has rights to edit/delete users
					?>
					<th width="10%"><?php echo $langProject['action']; ?></th>
					<?php
						}
					?>
				</tr>
			</thead>
			<tbody>
		<?php
		$rowStyle = 'first';
		while ($objMemberTeam = $objMemberList->rNext()) {
			$rowStyle = ($rowStyle)?'':' class="odd"';
		?>
				<tr<?php echo $rowStyle; ?>>
					<td><?php 
                        if ($objUser->checkLevel(1)) { 
                    ?>
                        <a href="user_details.php?id=<?php echo $objMemberTeam->member->id; ?>"<?php
						    if (!$objMemberTeam->position) {
							    echo ' class="disabled"';
    						}
	    				?>><?php 
                            echo $objMemberTeam->member->getName();
                        ?></a><?php
                        } else {
                            echo $objMemberTeam->member->getName();
                        }
                    ?>
                    </td>
					<td><?php echo $objMemberTeam->member->getLocation($arrCountry); ?></td>
					<td id="pos-<?php echo $objMemberTeam->member->id; ?>"><?php $objMemberTeam->pPosition(); ?></td>
					<?php 
						if ($pUserCanManage) { 
							// user has rights to edit/delete users
					?>
					<td id="but-<?php echo $objMemberTeam->member->id; ?>">
						<?php
							if (($objUser->id != $objMemberTeam->member->id)
								&& ($objMemberTeam->position < $pUserPosition))
							{ 
						?>
						<a href="javascript:edit(<?php echo $objMemberTeam->member->id.','.$objMemberTeam->position.','.$pUserPosition ?>)"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_edit.png" width="20" height="16" border="0" /></a>
						<a href="project_edit.php?id=<?php echo $objEditItem->id; ?>&delete=<?php echo $objMemberTeam->member->id; ?>" onclick="return confirm('really remove this user from the team?');"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_dele.png" width="20" height="16" border="0" /></a>
						<?php
							} else {
								echo '-';
							}
						?>
					</td>
					<?php 
						} 
					?>
				</tr>
		<?php
		}
		?>
			</tbody>
		</table>
    </fieldset>
	</form>
<?php
    }
?>
  </div>
</div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
