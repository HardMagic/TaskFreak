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

if (!$objUser->checkLevel(1)) {
    Tzn::redirect('logout.php','ERROR:'.$langMessage['denied']);
}

$pLink = 'user_list.php';

/* --- DELETE MEMBER ------------------------------------------------- */

if ($_REQUEST['mode']) {
	$objItem = new Member();
	$objItem->setUid($_REQUEST['mode']);
	if ($objItem->id) {
		$objItem->load();
        if ((($objUser->checkLevel(3)) || ($objUser->id == $objItem->author->id)) 
            && ($objUser->id != $objItem->id))
        {
            // user is administrator or creator of user and not himself
            if ($objItem->enabled) {
                $objItem->enabled = 0;
            } else {
                $objItem->enabled = 1;
            }
            $objItem->update('enabled');
            //Tzn::redirect('user_list.php');
        }
	}
}

if ($_REQUEST['delete']) {
	$objItem = new Member();
	$objItem->setUid($_REQUEST['delete']);
	if ($objItem->id) {
        if (($objUser->checkLevel(3)) && ($objUser->id != $objItem->id)) {
            // user is administrator and is not himself
            $objItem->delete();
            //Tzn::redirect('user_list.php');
        }
	}
}

/* --- LOAD MEMBERS --------------------------------------------------- */

$objItemList = new Member();

// --- search criterions ---

if ($sName = $_REQUEST['keyword']) {
	if (ereg('^".*"$',$sName)) {
		$hParam = str_replace('"','',$sName);
	} else if (ereg('\*',$iName)) {
		$hParam = str_replace('*','%',$sName);
	} else {
		$hParam = '%'.str_replace(' ','%',$sName).'%';
	}
	$objItemList->addWhere("(CONCAT(firstName,' ',middleName,' ',lastName) LIKE '$hParam' "
		."OR  username LIKE '$hParam')");
}

if ($sCountry = Tzn::getReg($_REQUEST['country'],'^[A-Z]+$')) {
	$objItemList->addWhere("member.countryId='".$sCountry."'");
}

if ($sState = Tzn::getReg($_REQUEST['state'],'^[A-Z]+$')) {
	$objItemList->addWhere("member.stateCode='".$sState."'");
}

// --- load ---

$objItemList->addOrder('level DESC,lastName ASC');
$objItemList->loadList();

// --- INIT POSITIONS --------
$objPositionList = new GlobalPositionList();

/* --- HTML ----------------------------------------------------------- */

$pageJScript = 'common.js';

include PRJ_INCLUDE_PATH.'html/header.php';

?>
<div id="content">
	<table cellspacing="1" cellpadding="2" border="0" width="100%" class="sheet">
		<thead>
			<tr align="left">
				<th width="25%"><?php echo $langUser['user']; ?></th>
				<th width="25%"><?php echo $langUser['location']; ?></th>
                <th width="10%"><?php echo $langUser['position']; ?></th>
                <th width="20%"><?php echo $langUser['last_login']; ?></th>
				<th width="10%" style="text-align:center"><?php
                if ($objUser->checkLevel(2)) {
                    ?><a href="user_edit.php?"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_new.png" width="39" height="16" border="0" hspace="3" alt="<?php echo $langForm['new']; ?>" /></a><?php
                } else {
                    echo $langUser['action'];
                }
                ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($objItem = $objItemList->rNext()) {
            if ($objItem->enabled) {
                $rowStyle = '';
                $imgStatus = 'ena';
            } else {
                $rowStyle = ' class="disabled"';
                $imgStatus = 'dis';
            }
		?>
			<tr<?php echo $rowStyle; ?>>
				<td><a href="user_details.php?id=<?php echo $objItem->id; ?>"><?php 
					echo $objItem->getName(); 
				?></a></td>
				<td><?php echo $objItem->getLocation(); ?></td>
                <td><?php echo $objPositionList->getPosition($objItem->level); ?></td>
                <td><?php echo $objItem->getDtm('lastLoginDate','SHX','user','-'); ?></td>
				<td align="center">
                    <?php
                    if (($objUser->checkLevel(3)) || ($objUser->id == $objItem->id) || ($objUser->id == $objItem->author->id)) {
                        if ($objUser->id != $objItem->id) {
                    ?>
                    <a href="<?php echo Tzn::concatUrl($pLink,'mode='.$objItem->id); ?>" onclick="return confirm('<?php echo ($objItem->enabled)?$langUser['disable_confirm']:$langUser['enable_confirm']; ?>');"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_<?php echo $imgStatus; ?>y.png" width="20" height="16" border="0" /></a>
                    <?php
                        } else {
                    ?>
                    <img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_<?php echo $imgStatus; ?>n.png" width="20" height="16" border="0" />
                    <?php
                        }
                    ?>
                    <a href="user_edit.php?id=<?php echo $objItem->id; ?>"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_edit.png" width="20" height="16" border="0" /></a>
                    <?php
                    } else {
                    ?>
                    <img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_<?php echo $imgStatus; ?>n.png" width="20" height="16" border="0" />
                    <img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_edin.png" width="20" height="16" border="0" />
                    <?php
                    }
                    if ($objUser->checkLevel(5)) {
                    ?>
					<a href="<?php echo Tzn::concatUrl($pLink,'delete='.$objItem->id); ?>" onclick="return confirm('<?php echo $langUser['delete_confirm']; ?>');"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_dele.png" width="20" height="16" border="0" /></a>
                    <?php
                    } else {
                    ?>
                    <img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/b_deln.png" width="20" height="16" border="0" />
                    <?php
                    }
                    ?>
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
