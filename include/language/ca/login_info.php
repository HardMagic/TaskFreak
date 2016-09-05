<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Catalan translation by Marti Minoves & AldeaGlobal (www.aldeaglobal.net)   *
\****************************************************************************/
    if (@constant('PRJ_REGISTRATION')) {
?>
<p> <b> Si no esteu inscrits <b> però voleu estar-hi <a href="user_register.php"> cliqueu aquí per a crear un compte </a>. </p>
<?php
     }
?>
<p> <b> Si teniu problemes per entrar </b>, pot ser degut a qualsevol de les següents raons: </p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
   <li> No heu accedit o la vostra sessió ha caducat </li>
   <li> Heu introduït una contrasenya incorrecta?
   <?php
   if (@constant('PRJ_PASSWORD_REMINDER')) {
   ?>
   <a href="user_password.php"> Demana una nova contrasenya per correu electrònic </a> </li>
   <?php
   }
   ?>
   <li> El seu navegador no suporta javascript </li>
   <li> El seu navegador no té les galetes activades </li>
   <li> No té suficients privilegis per accedir a la pàgina sol·licitada </li>
</ul>
