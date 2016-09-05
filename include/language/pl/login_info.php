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
<p><b>Jeżeli nie jesteś jeszcze użytkownikiem</b> ale chcesz się nim stać, <a href="user_register.php">załóż konto</a>.</p>
<?php
    }
?>
<p><b>Jeżeli masz problem z zalogowaniem się</b>, może oznaczać to, że:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Nie jesteś zalogowany, ponieważ sesja wygasła</li>
  <li>Podałeś nieprawidłowe hasło? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Wyślij hasło na adres mailowy</a></li>
  <?php
  }
  ?>
  <li>Twoja przeglądarka nie obsługuje javascript</li>
  <li>Twoja przeglądarka ma zablokowane ciasteczka (cookies)</li>
  <li>Nie masz prawidłowych uprawnień do logowania się na tą stronę</li>
</ul>
