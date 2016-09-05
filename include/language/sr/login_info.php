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
<p><b>Ako niste clan</b> ali biste voleli da budete, <a href="user_register.php">zatrazite nalog ovde</a>.</p>
<?php
    }
?>
<p><b>Ako imate probleme pri logovanju</b>, moguce je da je neki od sledecih razloga:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Niste logovani ili vam je sesija istekla</li>
  <li>Uneli ste pogresnu sifru? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Request a new one by email</a></li>
  <?php
  }
  ?>
  <li>Vas browser ne podrzava javascript</li>
  <li>Vas broswer nema ukljucno prihvatanje cookies-a</li>
  <li>Nemate dovoljno privilegija da pristupite strani koju trazite</li>
</ul>
