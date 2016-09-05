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

$pPageIsPublic=true;
include '_common.php';

if (isset($_POST["email"])) {

    include_once(PRJ_CLASS_PATH."pkg_com.php");

	$objUserFound = new Member();
	$objUserFound->setEml('email',$_POST['email']);

	if ($objUserFound->email) {

		if ($newpass = $objUserFound->forgotPassword("email",$_POST['email'])) {

			// send email
			$bodyMessage = "\r\n\r\n\tusername : ".$objUserFound->username
				."\r\n\tpassword : ".$newpass;
			$objMessage = new EmailMessage();
			$objMessage->setUid(4);
			$objMessage->load();
			// $objMessage->customHeader($objUserFound);
			
			$objMessage->send($bodyMessage, $objUserFound->get("email"));
			$pReminded = true;

			//echo $newpass;

		} else {

			$pErrorMessage = 'Error: '.$objUserFound->e("forgot");

		}
	} else {
	
		$pErrorMessage = 'Error: email address not valid';
	
	}
}

include PRJ_INCLUDE_PATH.'html/header.php';
?>
<div align="center">
  <div id="horiz">
	<p>&nbsp;</p>
	<p align="center"><a href="index.php"><img src="images/freak-logo.png" border="0" alt="TaskFreak!" /></a></p>
    <p>&nbsp;</p>
	<h1>Password reminder</h1>
<?php
	if ($pReminded) {

	/* --- REMINDED ------------------------------------------------ */

?>
<p>&nbsp;</p>
<div class="box mellow">
	<h2>Please check your emails</h2>
	<p>An email has been sent to you containing your username and password</p>
    <p><a href="login.php">Return to login form</a></p>
</div>
<p>&nbsp;</p>
<?php
	} else {
	
	/* --- FORM ---------------------------------------------------- */
	
		if ($pErrorMessage) {
			echo '<p class="box error" style="text-align:center">'.$pErrorMessage.'</p>';
		} else {
	?>
	<p><b>If you are a registered member</b> but forgot your username or password, simply fill and submit the form below.</p>
	<?php
		}
	?>
	<form action="user_password.php" method="post">
		<table cellpadding="3" cellspacing="0" border="0" align="center">
			<tr>
				<th>Email:</th>
				<td><?php Tzn::qText('email',$_POST['email']); ?></td>
				<td><input type="submit" name="reminder" value="Get new password"></td>
			</tr>
		</table>
	</form>
	<p>An email will be sent to you containing your username and new password.</p>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<?php
}
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
