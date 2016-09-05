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
<h2 class="ctr">Hvala <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Aktivirajte vaš racun</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Provijerite vaš e-mail</p>
<p class="ctr">Trebali bi primiti e-mail s autorizacijskim kljucem.</p>
<p class="ctr">Sljedite upute.</p>
<?php
}
?>
<p>&nbsp;</p>
