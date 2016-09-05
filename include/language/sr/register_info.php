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
<h2 class="ctr">Hvala vam <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Obavesteni smo i aktiviracemo vas nalog sto je pre moguce.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Molim vas kliknite na vase email sanduce.</p>
<p class="ctr">Trebalo bi da ste primili email sa aktivacionim kodom.</p>
<p class="ctr">Molimo vas da pratite instrukcije iz email-a kako biste zavrsili proces registracije.</p>
<?php
}
?>
<p>&nbsp;</p>
