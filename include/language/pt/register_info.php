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
<h2 class="ctr">Obrigado <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">N&oacute;s fomos notificados do seu cadastro e iremos ativ&aacute;-lo assim que poss&iacute;vel.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Por favor verifique seus e-mails.</p>
<p class="ctr">Voc&ecirc; ir&aacute; receber um e-mail contendo o c&oacute;digo de ativa&ccedil;&atilde;o.</p>
<p class="ctr">Siga as instru&ccedil;&otilde;es no e-mail para completar o registro.</p>
<?php
}
?>
<p>&nbsp;</p>
