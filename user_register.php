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

$pPageIsPublic = true;

include '_common.php';

// check settings again
if (!@constant('PRJ_REGISTRATION')) {
	Tzn::redirect('login.php','Sorry, accounts can be created by administrator only');
}

$objPositionList = new GlobalPositionList();

/* --- LOAD USER --------------------------------------------------- */

$objEditItem = new Member();

/* --- SAVE USER -------------------------------------------------- */

if ($_POST['submit']) {

    $pLevel = $objEditItem->level;
    
	$objEditItem->setAuto($_POST);
	
	$objEditItem->level = 0;
	$objEditItem->enabled = 0;

	if ($objEditItem->check($_POST['password1'],$_POST['password2'],true)) {
		
        if ($objEditItem->isLoaded()) {
    		$objEditItem->update();
        } else {
            $objEditItem->author->id = 1;
            $objEditItem->add();
        }
		
		Tzn::redirect('user_register.php?dude='.$objEditItem->id,'Information successfully saved');
		
	} else {
		$pMessageStatus = 'ERROR:There are some errors in the form - Information not saved!';
		// $objEditItem->printErrorList();
	}

} else if ($pDude = intval($_REQUEST['dude'])) {

	// request sent
	$objEditItem->setUid($pDude);
	$objEditItem->load();

	if ($objEditItem->enabled) {
		Tzn::redirect('login.php','Account already enabled, please log in');
	}

} else {
	
	// defaults
	$objEditItem->country->id = FRK_DEFAULT_COUNTRY;
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
		<p align="center"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/freak-logo.png" border="0" alt="TaskFreak!" /></p>
<?php
if ($pDude) {

	include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/register_info.php';

} else {
?>

        <form action="user_register.php" method="post">
		<?php

        include PRJ_INCLUDE_PATH.'html/user_form.php';
        
        ?><br />
        <p align="center">
            <input type="submit" name="submit" value="<?php echo $langButton['add_account']; ?>" /> &nbsp; <input type="reset" value="<?php echo $langButton['reset']; ?>" />
        </p>
        <p>&nbsp;</p>
		</form>
<?php
}
?>
      </div>
    </div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
