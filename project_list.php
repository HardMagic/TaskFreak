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

$pUserIsAdmin = $objUser->checkLevel(8);
$pLink = 'project_list.php';

$_SESSION['tznLastRef'] = $_SERVER['REQUEST_URI'];

/* --- DELETE Project ---------------------------------------------------- */

if ($_REQUEST['delete']) {
	$objItem = new Project();
    if ($objUser->checkLevel(9)) {
        // check is user can delete project
        $objItem->setUid($_REQUEST['delete']);
    } else {
        $objProjectCheck = new MemberProject();
        if ($objProjectCheck->loadByFilter($objProjectCheck->gTable('memberProject').'.projectId='
            .intval($_REQUEST['delete'])
            .' AND '.$objProjectCheck->gTable('memberProject').'.memberId='.$objUser->id))
        {
            if ($objProjectCheck->checkRights(14)) {
                $objItem =& $objProjectCheck->project;
            }
        }
    }
	if ($objItem->id) {
        $objItem->delete();
        $pMessageStatus = $langMessage['project_delete_ok'];
	} else {
        $pMessageStatus = 'ERROR:'.$langMessage['proect_delete_no'];
    }
    Tzn::redirect($pLink,$pMessageStatus);
}

/* --- LOAD PROJECTS ------------------------------------------------------ */

$objItemList = new ProjectStatsFull();

// --- search criterions ---

if ($sName = $_REQUEST['name']) {
	if (ereg('^".*"$',$sName)) {
		$hParam = str_replace('"','',$sName);
	} else if (ereg('\*',$iName)) {
		$hParam = str_replace('*','%',$sName);
	} else {
		$hParam = '%'.str_replace(' ','%',$sName).'%';
	}
	$objItemList->addWhere("pp.name LIKE '$hParam'");
}

if ($_REQUEST['complete']) {
	$objItemList->addWhere("statusKey >= 40");
}

// order
$objItemList->addOrder('ps.statusKey ASC, name ASC');

// load (all or own only)
/*
if (!$objUser->checkLevel(6)) {
    $objItemList->addWhere('p1.memberId='.$objUser->id);
}
*/
$objItemList->loadList($objUser->id,!$objUser->checkLevel(6));


/* --- HTML ---------------------------------------------------------------- */


include PRJ_INCLUDE_PATH.'html/header.php';

?>
<div id="content">
	<table cellspacing="1" cellpadding="2" border="0" width="100%" class="sheet">
		<thead>
			<tr align="left">
				<th width="50%"><?php echo $langProject['project']; ?></th>
                <th width="12%" class="act"><?php echo $langProject['position']; ?></th>
				<th width="8%" class="act"><?php echo $langProject['members']; ?></th>
				<th width="12%" class="act"><?php echo $langProject['status']; ?></th>
				<th width="8%" class="act"><?php echo $langForm['tasks']; ?></th>
				<th width="10%" class="act"><?php
                if ($objUser->checkLevel(7)) {
                    ?><a href="project_edit.php?"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_new.png" width="39" height="16" border="0" hspace="3" alt="<?php echo $langForm['new']; ?>" /></a><?php
                } else {
                    echo $langProject['action'];
                }
                ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$rowStyle = 'first';
        if ($objItemList->rMore()) {
            while ($objItem = $objItemList->rNext()) {
                if ($objItem->projectStatus->statusKey < 40) {
                $rowStyle = '';
            } else {
                $rowStyle = ' class="disabled"';
            }
		?>
			<tr<?php echo $rowStyle; ?>>
				<td><a href="project_edit.php?id=<?php echo $objItem->id; ?>"><?php $objItem->p('name'); ?></a></td>
                <td align="center"><?php $objItem->pPosition(); ?></td>
				<td align="center"><?php $objItem->p('memberCount'); ?></td>
				<td align="center"><?php $objItem->pStatus(); ?></td>
				<td align="center"><?php $objItem->p('itemCount',0); ?></td>
				<td align="center">
					<a href="project_edit.php?id=<?php echo $objItem->id; ?>"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_edit.png" width="20" height="16" border="0" /></a>
                    <?php
                    if ($objItem->memberProject->checkRights(14) || ($objUser->checkLevel(9))) {
                    ?>
					<a href="<?php echo Tzn::concatUrl($pLink,'delete='.$objItem->id); ?>" onclick="return confirm('<?php echo $langMessage['project_delete_confirm']; ?>');" title="<?php echo $langMessage['project_delete']; ?>"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_dele.png" width="20" height="16" border="0" alt="<?php echo $langMessage['project_delete']; ?>" /></a>
                    <?php
                    } else {
                    ?>
                    <img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_deln.png" width="20" height="16" border="0" alt="<?php echo $langMessage['project_delete']; ?>" title="<?php echo $langMessage['project_delete_no']; ?>"" />
                    <?php
                    }
                    ?>
				</td>
			</tr>
		<?php
		    }
        } else {
        ?>
            <tr>
                <td colspan="6">
                    <p>&nbsp;</p>
                    <p align="center">- <?php echo $langMessage['no_project_found']; ?> -</p>
                    <p>&nbsp;</p>
                </td>
            </tr>
        <?php
        }
		?>
		</tbody>
	</table>
</div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
