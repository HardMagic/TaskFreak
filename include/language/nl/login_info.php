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
<p><b>Als u geen lid bent</b>, maar dat wel wilt worden, <a href="user_register.php">vraag dan hier een account aan</a>.</p>
<?php
    }
?>
<p><b>Als u problemen heeft met inloggen</b>, komt dat wellicht doordat:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>U niet bent ingelogd of uw sessie is verlopen</li>
  <li>U een verkeerd wachtwoord heeft opgegeven?
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Vraag per email een nieuw wachtwoord aan</a></li>
  <?php
  }
  ?>
  <li>Uw browser ondersteunt geen Javascript</li>
  <li>Cookies zijn uitgschakeld in uw browser</li>
  <li>U heeft onvoldoende toegangsrechten om de opgevraagde pagina te bekijken</li>
</ul>
