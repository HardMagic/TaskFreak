<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Wang Yingqi <wangyingqi@gmail.com>                          *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/



?>
<p>&nbsp;</p>
<h2 class="ctr">谢谢<?php echo $objEditItem->getName(); ?>!</h3>
<?php
switch (PRJ_REGISTRATION) {
case 1:
?>
<p class="ctr">我们已经接受了您的注册请求.并且将尽快激活您的帐户.</p>
<p>&nbsp;</p>
<?php
	break;
case 2:
?>
<p class="ctr">请检查您的邮箱</p>
<p class="ctr">您将获得一封带有激活码的邮件</p>
<p class="ctr">请按照邮件的提示完成您的注册.</p>
<?php
}
?>
<p>&nbsp;</p>
