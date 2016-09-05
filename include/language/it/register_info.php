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
<h2 class="ctr">Grazie <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">A breve riceverai una notifica e il tuo account sarà attivato il prima possibile.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Controlla la tua posta.</p>
<p class="ctr">Dovresti aver ricevuto un'email contenente il tuo Codice di Attivazione.</p>
<p class="ctr">Segui le istruzione nell'email per completare il processo di registrazione.</p>
<?php
}
?>
<p>&nbsp;</p>
