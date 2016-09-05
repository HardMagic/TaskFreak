<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.4.2                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Tak skal du have <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Vi har modtaget forespørgslen og vil aktivere din konto snarrest muligt.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Tjek venligst din mailbox.</p>
<p class="ctr">Du skulle gerne ha' modtaget en email indeholdne en aktiverings kode.</p>
<p class="ctr">Følg venligst instruktionerne i din email for at færdiggøre registrationen.</p>
<?php
}
?>
<p>&nbsp;</p>
