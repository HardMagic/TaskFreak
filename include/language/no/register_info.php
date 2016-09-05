<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Norwegian translation by Håvard Kristoffersen, www.theta-design.no	     *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Takk <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Vi har fått beskjed og vil aktivere din konto så snart vi kan.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Vennligst sjekk innboksen din.</p>
<p class="ctr">Du skal ha mottatt en e-post med aktiveringskode.</p>
<p class="ctr">Vennligst følg instruksjonene i den e-posten for å fullføre registreringen.</p>
<?php
}
?>
<p>&nbsp;</p>
