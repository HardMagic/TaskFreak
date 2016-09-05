<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Tobias Frasch <frasch@starsolutions.de>                     *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Vielen Dank <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Wir wurden benachrichtigt und werden Ihren Zugang so schnell wie möglich aktivieren.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Bitte überprüfen Sie Ihr Postfach.</p>
<p class="ctr">Sie sollte eine E-Mail mit Ihrem Aktivierungscode bekommen haben.</p>
<p class="ctr">Bitte folgen Sie den Anweisungen in der E-Mail um Ihre Registrierung abzuschließen.</p>
<?php
}
?>
<p>&nbsp;</p>
