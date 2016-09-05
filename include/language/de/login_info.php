<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Tobias Frasch <frasch@starsolutions.de>                     *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Wenn Sie kein Mitglied sind</b> aber gern eins werden wollen, <a href="user_register.php">fordern Sie hier einen Zugang an.</a>.</p>
<?php
    }
?>
<p><b>Wenn Sie Probleme haben, sich einzuloggen</b>, kann das einen dieser Gr&uuml;nde haben:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Sie sind nicht eingeloggt oder ihre Session ist abgelaufen</li>
  <li>Sie haben ein falsches Passwort eingegeben
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Lassen Sie sich per E-Mail ein neues Passwort schicken</a></li>
  <?php
  }
  ?>
  <li>Ihr Browser unterst&uuml;tzt kein JavaScript</li>
  <li>Ihr Browser hat Cookies deaktiviert</li>
  <li>Sie haben keine ausreichende Berechtigung um auf die angeforderte Seite zuzugreifen</li>
</ul>
