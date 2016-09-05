<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Vicente Jiménez Aguilar <googuy+taskfreak@gmail.com>              *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Gracias <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Hemos recibido su petici&oacute;n y activaremos su cuenta tan pronto como sea posible.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Por favor, verifique su buz&oacute;n de entrada.</p>
<p class="ctr">Deber&iacute;a haber recibido un correo electr&oacute;nico con el c&oacute;digo de activaci&oacute;n.</p>
<p class="ctr">Siga las intrucciones del correo electr&oacute;nico para completar la inscripci&oacute;n.</p>
<?php
}
?>
<p>&nbsp;</p>
