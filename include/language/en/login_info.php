<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>If you are not a member</b> but would like to become one, <a href="user_register.php">request an account here</a>.</p>
<?php
    }
?>
<p><b>If you have problems loging in</b>, it might be because of one of the following reasons:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>You are not logged in or your session has expired</li>
  <li>You enter the wrong password? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Request a new one by email</a></li>
  <?php
  }
  ?>
  <li>Your browser does not support javascript</li>
  <li>Your browser does not have cookies enabled</li>
  <li>You do not have sufficient access rights to access the requested page</li>
</ul>
