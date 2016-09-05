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

$pRef = '';
if ($_REQUEST['ref']) {
	$pRef = $_REQUEST['ref'];
} else if (!preg_match('/(index|register|registered|log(in|out))\.php/',$_SERVER['HTTP_REFERER'])) {
	$pRef = $_SERVER['HTTP_REFERER'];
}

if ($_REQUEST['forgot']) {
	Tzn::redirect('user_password.php?username='.urlencode(Tzn::getHttp($_REQUEST['username'])));
}

if (isset($_POST["username"])) {
	if ($objUser->login($_POST["username"],$_POST["password"])) {
        if (@constant('PRJ_AUTO_LOGIN') && $_POST['remember']) {
            $objUser->setAutoLogin();
        }
		if ($pRef) {
			Tzn::redirect($pRef);
		} else {
			Tzn::redirect('index.php');
		}
	} else {
		$pErrorMessage = 'Login Failed: '.$objUser->e('login');
		//$objUser->printErrorList();
	}
}
$pJSonLoad .= 'document.forms[0].username.focus();';
include PRJ_INCLUDE_PATH.'html/header.php';
?>
<div align="center">
  <div id="horiz">
	<p>&nbsp;</p>
	<p align="center"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/freak-logo.png" border="0" alt="TaskFreak!" /></p>
  <?php
  
	if ($pErrorMessage) {
		echo '<p class="box error" style="text-align:center">'.$pErrorMessage.'</p>';
	}
  ?>
	<form action="login.php" method="post">
        <?php $objUser->qLoginTimeZone(); ?>
        <table cellpadding="3" cellspacing="0" border="0" align="center">
            <tr>
                <th><?php echo $langUser[TZN_USER_LOGIN]; ?>:</th>
                <td><?php Tzn::qText('username',$_REQUEST['username'],'width:130px'); ?></td>
            </tr>
            <tr>
                <th><?php echo $langUser['password']; ?>:</th>
                <td><input type="password" name="password" value="" style="width:130px" /></td>
            </tr>
            <?php
                if (@constant('PRJ_AUTO_LOGIN')) { 
            ?>
            <tr>
                <td colspan="2" align="center">
                    <?php 
                        Tzn::qCheckBox('remember','','vertical-align:middle');
                        echo '<label>'.$langUser['auto_login'].'</label>';
                    ?>
                </td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="login" value="<?php echo $langMenu['login']; ?>" /></td>
            </tr>
        </table>
	</form>
	<?php
	if ($pErrorMessage) {
	   include PRJ_INCLUDE_PATH.'language/'.FRK_LANGUAGE.'/login_info.php';
	} else if (@constant('PRJ_REGISTRATION')) {
	?>
	<p class="ctr"><a href="user_register.php"><?php echo $langUser['login_signup']; ?></a></p>
	<?php
	}
	?>
	<p>&nbsp;</p>
  </div>
</div>
<?php
include PRJ_INCLUDE_PATH."html/footer.php";

