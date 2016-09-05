<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.4.2                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Hvis du ikke er medlem</b> men gerne vil være det, <a href="user_register.php">få en konto her</a>.</p>
<?php
    }
?>
<p><b>Hvis du har problemer med at logge ind</b>, kan det være på grund af en af de følgende årsager:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Du er ikke logget ind eller din session er udløbet</li>
  <li>Du har skrevet et forkert password? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Få sendt et nyt på  email</a></li>
  <?php
  }
  ?>
  <li>Din browser har ikke javascript support</li>
  <li>Din browser har ikke cookies tilsluttet</li>
  <li>Du har ikke rettigheder til at åbne den forespurgte side</li>
</ul>
