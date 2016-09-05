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



    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>如果您不是註冊用戶</b>請在此<a href="user_register.php">註冊</a>新用戶</p>
<?php
    }
?>
<p><b>如果您登入失敗</b>, 可能由於以下原因:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>您未登入或登入會話已過期</li>
  <li>您輸入了一個錯誤的密碼.
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">取回密碼</a></li>
  <?php
  }
  ?>
  <li>您的瀏覽器不支援javascript</li>
  <li>您的瀏覽器禁用了cookie</li>
  <li>您的沒有足夠權限訪問該頁面</li>
</ul>
