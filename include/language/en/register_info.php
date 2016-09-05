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
<h2 class="ctr">Thank you <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">We have been notified and will activate your account as soon as possible.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Please check your mailbox.</p>
<p class="ctr">You should have received an email containing an activation code.</p>
<p class="ctr">Please follow the instructions in the email in order to complete the registration.</p>
<?php
}
?>
<p>&nbsp;</p>
