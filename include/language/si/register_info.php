<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Hvala <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Bili smo obveščeni in bomo vaš račun aktivirali kar se da hitro.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Prosim preverite vaš poštni predal.</p>
<p class="ctr">Morali bi prejeti e-pošto z aktivacijsko kodo.</p>
<p class="ctr">Za zaključek registracije prosim sledite navodilom v e-pošti, ki ste jo prejeli.</p>
<?php
}
?>
<p>&nbsp;</p>
