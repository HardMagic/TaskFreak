<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Po Ming <poming168@gmail.com>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/



?>
<p>&nbsp;</p>
<h2 class="ctr">謝謝<?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">我們已經接受了您的註冊請求.並且將盡快激活您的帳戶.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">請檢查您的郵箱</p>
<p class="ctr">您將獲得一封帶有啟動碼的郵件</p>
<p class="ctr">請按照郵件的提示完成您的註冊.</p>
<?php
}
?>
<p>&nbsp;</p>
