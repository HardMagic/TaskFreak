<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Bedankt <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">We zijn op de hoogte en activeren uw account zo spoedig mogelijk.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Kijk in uw mailbox.</p>
<p class="ctr">Als het goed is heeft u een email ontvangen met een activatiecode.</p>
<p class="ctr">Volg de instructies in de email om de registratie te voltooien.</p>
<?php
}
?>
<p>&nbsp;</p>
