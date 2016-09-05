<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Vicente Jiménez Aguilar <googuy+taskfreak@gmail.com>              *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Si no esta inscrito<b> pero quiere estarlo <a href="user_register.php">pincha aqu&iacute; para solicitar una cuenta</a>.</p>
<?php
    }
?>
<p><b>Si tiene problemas para entrar</b>, puede deberse a cualquiera de las siguientes razones:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>No ha accedido o su sesi&oacute;n ha caducado</li>
  <li>&iquest;Ha introducido una contrase&ntilde;a incorrecta?
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Solicitar una nueva por correo electr&oacute;nico</a></li>
  <?php
  }
  ?>
  <li>Su navegador no soporta javascript</li>
  <li>Su navegador no tiene las cookies activadas</li>
  <li>No tiene suficientes privilegios para acceder a la p&aacute;gina solicitada</li>
</ul>
