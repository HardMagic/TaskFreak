<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation: Jan Michalicka <webdev@jimi.sk>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Ďakujem ti <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Budeš notifikovaný a potom si aktivuj čo najskôr konto.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Prosím pozri sa do emailovej schránky.</p>
<p class="ctr">Mal by ti prísť email s aktivačným kódom.</p>
<p class="ctr">Prosím postupuj podľa krokov v emaile pre dokončenie registrácie.</p>
<?php
}
?>
<p>&nbsp;</p>
