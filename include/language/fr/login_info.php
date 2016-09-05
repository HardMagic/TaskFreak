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
<p><b>Si vous n'êtes pas membre</b> mais que vous souhaitez vous inscrire, <a href="user_register.php">demandez un identifiant ici</a>.</p>
<?php
    }
?>
<p><b>Si vous rencontrez des probl&egrave;mes pour vous connecter</b>, cela peut provenir des raisons suivantes :</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Vous n'êtes pas identifié ou la session a expiré</li>
  <li>Vous avez entré un mot de passe erroné
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Demander un nouveau mot de passe par email</a></li>
  <?php
  }
  ?>
  <li>Votre navigateur ne reconnaît pas Javascript</li>
  <li>Votre navigateur n'autorise pas les cookies</li>
  <li>Vous n'avez pas l'autorisation d'accéder à la page demandée</li>
</ul>
