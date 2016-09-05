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

$objPositionList = new GlobalPositionList();

/* --- LOAD USER --------------------------------------------------- */

$objEditItem = new Member();

if ($_REQUEST['id']) {
    $objEditItem->setUid($_REQUEST['id']);
    if (!$objEditItem->load()) {
        $pMessageStatus = 'ERROR:'.$GLOBALS['langMessage']['not_found_or_denied'];
    }
    if (!$objUser->checkLevel(3) && ($objUser->id != $objEditItem->author->id)) {
        // only if admin or creator loads specific user
        // otherwise user edits its own profile
        $objEditItem =& $objUser;
    }
}
if (!$objEditItem->isLoaded()) {
    if ($objUser->checkLevel(2)) {
        // user is administrator and tries to create new user
        $objEditItem->initObjectProperties();
        $objEditItem->country->id = FRK_DEFAULT_COUNTRY;
    } else {
        // user is editing himself
        $objEditItem =& $objUser;
    }
}

/* --- SAVE USER -------------------------------------------------- */

if ($_POST['submit']) {

    $pLevel = $objEditItem->level;
    
	$objEditItem->setAuto($_POST);
	
    if (($objEditItem->id != $objUser->id) && ($objUser->checkLevel(2))) {
        // check requested level is not higher than user's own level
        $pLevel = min($objUser->level,$_POST['level']);
    }

    $objEditItem->level = $pLevel;

	if ($_POST['enabled']) {
		$objEditItem->enabled = 1;
	} else if ($objEditItem->id != $objUser->id) {
		$objEditItem->enabled = 0;
	}
	
	if ($objEditItem->check($_POST['password1'],$_POST['password2'])) {
		
        if ($objEditItem->isLoaded()) {
    		$objEditItem->update();
        } else {
            $objEditItem->author->id = $objUser->id;
            $objEditItem->add();
        }
		
		Tzn::redirect('user_details.php?id='.$objEditItem->id, $GLOBALS['langMessage']['information_saved']);
		
	} else {
		$pMessageStatus = 'ERROR:'.$GLOBALS['langTznCommon']['form_error'];
		// $objEditItem->printErrorList();
	}
}

/* --- LOAD COUNTRIES ------------------------------------------------- */

$objCountryList = new Country();
$objCountryList->addOrder('name');
$objCountryList->loadList();

/* --- LOAD STATES ---------------------------------------------------- */

$objStateList = new UsState();

/* --- HTML ----------------------------------------------------------- */

$pageJScript = 'common.js';

include PRJ_INCLUDE_PATH.'html/header.php';
?>
    <div align="center">
      <div id="horiz">
        <form action="user_edit.php" method="post">
        <?php $objEditItem->qHidden('id'); 
        
        include PRJ_INCLUDE_PATH.'html/user_form.php';
        
        ?><br />
        <p align="center">
            <input type="submit" name="submit" value="<?php
            if ($objEditItem->isLoaded()) {
                echo $langButton['update'];
            } else {
                echo $langButton['add'];
            }
            ?>" /> &nbsp; <input type="reset" value="<?php echo $langButton['reset']; ?>" />
            <?php
            if ($objUser->checkLevel(1)) {
            ?>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="button" value="<?php echo $langButton['back']; ?>" onClick="window.location.href='user_list.php'" />
            <?php
            }
            ?>
        </p>
        <p>&nbsp;</p>
        </form>
      </div>
    </div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
