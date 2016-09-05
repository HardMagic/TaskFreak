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
<p><b>Sei non sei un membro</b> ma vuoi diventarlo, <a href="user_register.php">richiedi qui l'attivazione di un account</a>.</p>
<?php
    }
?>
<p><b>Se hai problemi ad accedere</b>, puo' dipendere da una di queste cause:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Non hai effettuato il login o la sessione e' scaduta</li>
  <li>Hai inserito una password non corretta?
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Richiedine una per email</a></li>
  <?php
  }
  ?>
  <li>Il tuo browser non supporta i javascript</li>
  <li>Il tuo browser ha i cookies disabilitati</li>
  <li>Non hai i permessi di accesso necessari per visualizzare la pagina richiesta</li>
</ul>
