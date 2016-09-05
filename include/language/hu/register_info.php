<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.5                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Köszönjök <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Jelentkezését megkaptuk, azonnal értesítjük ha hozzáférését elérhetővé tettük.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Ellenőrízze postafikókját.</p>
<p class="ctr">Az aktiváló kódot e-mailben küldtük el.</p>
<p class="ctr">Kövesse az e-mailben megadott utasításokat hogy befejezhesse a regisztrációt.</p>
<?php
}
?>
<p>&nbsp;</p>
