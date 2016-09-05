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
<h2 class="ctr">Спасибо <?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">Мы активируем ваш аккаунт как можно скорее.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">Проверьте ваш email.</p>
<p class="ctr">Вы должны получить письмо с кодом активации.</p>
<p class="ctr">Пожалуйста следуйте инструкциям в письме для завершения регистрации.</p>
<?php
}
?>
<p>&nbsp;</p>
