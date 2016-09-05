<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user  - Swedish language, sunday version...                          *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Marcus Persson <marcus (at) gazebo.se>                            *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Tack <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Vi har mottagit din ansökan och kommer att aktivera ditt konto så fort vi kan.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Granska inkorgen för din e-postadress.</p>
<p class="ctr">Du skall ha mottagit ett e-post brev som innehåller din aktiverings kod.</p>
<p class="ctr">Var god följ instruktionerna i ditt e-post brev för att slutföra din registrering.</p>
<?php
}
?>
<p>&nbsp;</p>
