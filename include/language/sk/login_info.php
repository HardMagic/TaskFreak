<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation: Jan Michalicka <webdev@jimi.sk>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Ak nie si člen</b> ale sa ním chceš stať, <a href="user_register.php">požiadaj si tu o konto</a>.</p>
<?php
    }
?>
<p><b>Ak máš problém s prihlásením</b>, može to mať nasledujúci dôvod:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Nie si prihlásený, alebo prihlásenie vyexpirovalo</li>
  <li>Vložil si nesprávne heslo? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Požiadaj o nové emailom</a></li>
  <?php
  }
  ?>
  <li>Tvoj prehliadač nepodporuje javascript</li>
  <li>Tvoj prehliadač nemá povolené cookies</li>
  <li>Nemáš príslušné prístupové práva pre prístup na stránku</li>
</ul>
