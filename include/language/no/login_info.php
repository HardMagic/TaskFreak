<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Norwegian translation by Håvard Kristoffersen, www.theta-design.no	     *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Hvis du ikke er medlem</b> men gjerne vil bli en, <a href="user_register.php">be om en konto her</a>.</p>
<?php
    }
?>
<p><b>Hvis du har problemer med å logge inn</b>, kan de skyldes en av de følgende årsaker:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Du er ikke innlogget eller sesjonen er utgått</li>
  <li>Du har skrevet feil passord...?
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Be om er nytt passord på e-mail</a></li>
  <?php
  }
  ?>
  <li>Din nettleser støtter ikke javascript</li>
  <li>Din nettleser tillater ikke cookies</li>
  <li>Du har ikke tilstrekkelig tilgangsnivå til den ønskede siden</li>
</ul>
