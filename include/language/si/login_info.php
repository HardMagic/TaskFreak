<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Če še niste član</b> pa bi to radi postali, <a href="user_register.php">zahtevajte račun tukaj</a>.</p>
<?php
    }
?>
<p><b>Če imate težave s prijavo</b>, so lahko razlogi za to naslednji:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Niste prijavljeni ali pa je seja potekla</li>
  <li>Vnesli ste napačno geslo? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Zahtevajte novega preko e-pošte</a></li>
  <?php
  }
  ?>
  <li>Vaš brskalnik ne podpira javascript-a</li>
  <li>Vaš brskalnik nima vključene podpore za piškotke</li>
  <li>Nimate pravic za dostop do zahtevane strani</li>
</ul>
