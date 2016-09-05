<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Catalan translation by Marti Minoves & AldeaGlobal (www.aldeaglobal.net)   *
\****************************************************************************/


?>
<p>&nbsp;</p>
<h2 class="ctr">Gràcies <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr"> Hem rebut la vostra peticióny activarem el vostre compte tan aviat com sigui possible. </p>
</p>
<?php
Break;
case 2:
?>
<p class="ctr"> Verifiqueu la vostra bústia d'entrada. </p>
<p class="ctr"> hauria d'haver rebut un correu electrònic amb el codi d'activació. </p>
<p class="ctr"> Seguiu les instruccions del correu electrònic per completar la inscripció. </p>
<?php
}
?>
<p>&nbsp;</p>
