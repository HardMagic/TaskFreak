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
<p>Registracija<a href="user_register.php">ovdje</a>.</p>
<?php
    }
?>
<p><b>Problemi?</b>Razlozi:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>niste logirani ili vam je sesija istekla</li>
  <li>Kriva lozinka 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Zaboravili lozinku?</a></li>
  <?php
  }
  ?>
  <li>Ukljucite Javascript</li>
  <li>Ukljucite kolacice</li>
  <li>Nemate prava na ovaj projekt</li>
</ul>
