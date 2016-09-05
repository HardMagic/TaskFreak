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

/* --- LOAD USER --------------------------------------------------- */

$objItem = new Member();

if ($_REQUEST['id'] && $objUser->checkLevel(1)) {
	// admin loads specific user
	$objItem->setUid($_REQUEST['id']);
	$objItem->load();
}
if (!$objItem->isLoaded()) {
	// user is viewing himself
	$objItem =& $objUser;
}

/* --- ACTIONS -------------------------------------------------------- */

$pUserIsAdmin = false; // -TODO- enable actions

/*
if ($pUserIsAdmin) {

	// ----- remove user from team -----
	
	if ($_REQUEST['delete']) {
		$objMemberTeam = new MemberProject();
		$objMemberTeam->initObjectProperties();
		$objMemberTeam->member->id = $objItem->id;
		$objMemberTeam->project->setUid($_REQUEST['delete']);
		if ($objMemberTeam->delete()) {
			$pMessageStatus = 'Member removed from team!';
		} else {
			$pMessageStatus = 'ERROR:Member can not be removed or has already been removed';
		}
	}
	
	// ----- update position ----
	
	foreach ($_REQUEST as $key => $value) {
		if (ereg('^position-',$key)) {
			$id = intval(substr($key,9));
			$objMemberTeam = new MemberProject();
			if ($objMemberTeam->loadPosition($id,$objItem->id))
			{
				if ($objMemberTeam->position != $value) {
					// update database
					$objMemberTeam->position = $value;
					$objMemberTeam->getConnection();
					$objMemberTeam->update('position');
				}
			}
		}
	}

}
*/


/* --- LOAD STATES ---------------------------------------------------- */

$objStateList = new UsState();

/* --- LOAD TEAMS ----------------------------------------------------- */

$objMemberList = new MemberProject();
$objMemberList->addWhere($objMemberList->gTable('memberProject').'.memberId = '.$objItem->id);
$objMemberList->addOrder('position DESC, member.lastName ASC');
$objMemberList->loadList();

/* --- HTML ----------------------------------------------------------- */

$pJScript = 'team.js';
$pCss = 'levels.css';

include PRJ_INCLUDE_PATH.'html/header.php';
?>
<div align="center">
  <div id="horiz">
	<fieldset>
		<legend><?php 
            echo $langUser['information'].' ('.$objItem->username.')'; 
			if (($objItem->id == $objUser->id) || ($objUser->checkLevel(3))) {
				echo ' <a href="user_edit.php?id='.$objItem->id.'" class="discrete"><img src="skins/'.FRK_SKIN_FOLDER.'/images/b_edit.png" width="20" height="16" border="0" alt="edit" /></a>';
			}
		?></legend>
        <div align="right"><small><?php echo $GLOBALS['langUser']['account_created'].' '.$objItem->getDte('creationDate','SHT'); ?> 
        by <?php echo $objItem->author->getShortName(); ?></small></div>
		<table cellpadding="2" cellspacing="1" border="0" class="form">
			<tr>
				<th width="100"><?php echo $langUser['name']; ?>:</th>
				<td><big><?php echo $objItem->getName(); ?></big></td>
			</tr>
			<tr valign="top">
				<th><?php echo $langUser['address']; ?>:</th>
				<td><?php 
					if ($objItem->city) {
						$objItem->p('city');
					}
					if ($objItem->stateCode) {
						echo ' '.$objItem->stateCode;
					}
					if ($objItem->city || $objItem->stateCode) {
						echo '<br />';
					}
					echo strtoupper($objItem->country->name);
				?></td>
			</tr>
            <tr>
                <th><?php echo $langUser['position']; ?>:</th>
                <td><?php
                    if (!$objItem->enabled) {
                        echo ' <span class="disabled">'.$GLOBALS['langUser']['account_disabled'].'</span>';
                    } else {
                        foreach ($GLOBALS['langGlobalPosition'] as $key => $label) {
                            if ($key == $objItem->level) {
                                echo '<span class="level_high level_'.$key.'">';
                            } else {
                                echo '<span class="level_pad level_0">';
                            }
                            echo $label.'</span> ';
                        }
                    }
                ?></td>
            </tr>
		</table>
        <?php
            if ($objUser->checkLevel(1)) {
        ?>
        <div style="margin-top:12px; text-align:right;">
            <input type="button" value="<?php echo $langButton['back']; ?>" onClick="window.location.href='user_list.php'" />
        </div>
        <?php
            }
        ?>
	</fieldset>
	<br />
	<fieldset>
		<legend><?php echo $langProject['projects']; ?></legend>
		<form action="user_details.php">
			<?php $objItem->qHidden('id'); ?>
		<?php
		if ($objMemberList->rMore()) {
		?>
		<table cellspacing="0" cellpadding="3" border="0" width="100%" class="data">
			<thead>
				<tr align="left">
					<th width="<?php echo ($pUserCanEdit)?'34':'40'; ?>%"><?php echo $langUser['name']; ?></th>
					<th width="18%"><?php echo $langProject['position']; ?></th>
					<?php 
						if ($pUserIsAdmin) { 
							// user has rights to edit/delete users
					?>
					<th width="12%"><?php echo $langProject['action']; ?></th>
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
					<td><a href="project_edit.php?id=<?php echo $objMemberTeam->project->id; ?>"<?php
						if (!$objMemberTeam->position) {
							echo ' class="disabled"';
						}
					?>><?php 
						echo $objMemberTeam->project->get('name');
					?></a></td>
					<td id="pos-<?php echo $objMemberTeam->project->id; ?>"><?php $objMemberTeam->pPosition(); ?></td>
					<?php 
						if ($pUserIsAdmin) { 
							// user has rights to edit/delete users
					?>
					<td id="but-<?php echo $objMemberTeam->project->id; ?>">
						<?php
							if ((($objUser->id != $objMemberTeam->member->id)
								&& ($objMemberTeam->position < $objUserTeam->position))
								|| $objUser->checkLevel(8))
							{ 
						?>
						<a href="javascript:edit(<?php echo $objMemberTeam->project->id.','.$objMemberTeam->position.',4' ?>)"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_edit.png" width="20" height="16" border="0" /></a>
						<a href="user_details.php?id=<?php echo $objItem->id; ?>&delete=<?php echo $objMemberTeam->project->id; ?>" onclick="return confirm('<?php echo $langProject['remove_confirm']; ?>');"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_dele.png" width="20" height="16" border="0" /></a>
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
		<?php
		} else {
		?>
		<p>&nbsp;</p>
		<p align="center">- <?php echo $langProject['user_no_project']; ?> -</p>
		<p>&nbsp;</p>
		<?php
		}
		?>
		</form>
	</fieldset>
  </div>
</div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
