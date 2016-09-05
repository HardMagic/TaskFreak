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
<p><b>Se voc&ecirc; n&atilde; for um membro</b> mas voc&ecirc; quer se tornar um, <a href="user_register.php">clique aqui para requisitar uma conta de usu&aacute;rio</a>.</p>
<?php
    }
?>
<p><b>Se voc&ecirc; estiver com problemas para logar</b>, pode ser por uma destas raz&otilde;es:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Voc&ecirc; n&atilde; est&aacute; logado ou a sua sess&atilde;o expirou</li>
  <li>Voc&ecirc; colocou a senha errada?
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Requisite uma nova senha por e-mail</a></li>
  <?php
  }
  ?>
  <li>O Seu navegador n&atilde;o possu&iacute; suporte a javascript</li>
  <li>O Seu navegador n&atilde;o possu&iacute; suporte a cookies habilitado</li>
  <li>Voc&ecirc; n&atilde;o tem permiss&otilde;es suficientes para acessar a p&aacute;gina requisitada.</li>
</ul>
