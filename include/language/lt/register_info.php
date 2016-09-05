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
<h2 class="ctr">Aèiû jums <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Mes buvome praneðti ir aktyvinsime jûsø praneðimà kiek galima greièiau.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Praðom patikrinti savo paðto dëþutæ.</p>
<p class="ctr">Jûs turëjote gauti elektroniná laiðkà, kuriame bus aktyvacijos kodas.</p>
<p class="ctr">Praðom sekti instrukcijas elektroniniame paðte, kad uþbaigtumëte registracijà.</p>
<?php
}
?>
<p>&nbsp;</p>
