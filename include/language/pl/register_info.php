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
<h2 class="ctr">Dziękuję <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Konto zostało założone, zostanie aktywowane tak szybko jak to możliwe .</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Sprawdź swoją skrzynkę mailową.</p>
<p class="ctr">Powinieneś otrzymać wiadomość zawierającą kod aktywujący.</p>
<p class="ctr">Postępuj zgodnie z instrukcjami aby dokończyć proces rejestracji.</p>
<?php
}
?>
<p>&nbsp;</p>
