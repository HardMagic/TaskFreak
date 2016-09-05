<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.4                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Thank you <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Talebinizi aldık, en kısa zamanda hesabınız açılacaktır.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Lütfen emaillerinizi kontrol edin.</p>
<p class="ctr">İçerisinde aktivasyon kodu bulunan bir email almış olmalısınız.</p>
<p class="ctr">Emaildeki yönlendirmeleri okuyarak başvurunuzu devam ettirin.</p>
<?php
}
?>
<p>&nbsp;</p>
