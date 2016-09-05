<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.4                                                            *
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

$pPageIsPublic=true;
include '_common.php';

if ($objUser->isLogged()) {
	$objUser->load();
}
$userTimeZone = $_SESSION['tznUserTimeZone'];
$objUser->logout();
$pUserIsLogged = false;
$objUser->level = 0;


include PRJ_INCLUDE_PATH.'html/header.php';
?>
<div align="center">
	<div id="horiz">
        <p>&nbsp;</p>
        <p align="center"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/freak-logo.png" border="0" alt="TaskFreak!" /></p>
        <?php
        if ($pMessageStatus = Tzn::getHttp($_REQUEST['tznMessage'], 'html')) {
            echo '<p class="box error" style="text-align:center">'.$pMessageStatus.'</p>';
        }
        ?>
        <table cellpadding="2" id="logout" align="center">
            <tr>
                <td colspan="2"><?php echo $GLOBALS['langUser']['logout_goodbye']; ?><br />&nbsp;</td>
            </tr>
            <tr valign="top">
                <th><?php echo $GLOBALS['langUser']['last_login']; ?> :</th>
                <td><?php $objUser->pDtm("lastLoginDate","%a %d %b %Y<br>%r",$userTimeZone); ?></td>
            </tr>
            <tr>
                <th><?php echo $GLOBALS['langUser']['last_login_from']; ?> :</th>
                <td><?php $objUser->pStr("lastLoginAddress");?></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="login.php?"><?php echo $GLOBALS['langUser']['logout_login']; ?></a></td>
            </tr>
        </table>
	</div>
</div>
<?php
include PRJ_INCLUDE_PATH."html/footer.php";
?>
