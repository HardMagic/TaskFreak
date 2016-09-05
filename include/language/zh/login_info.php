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



    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>如果您不是注册用户</b>请在此<a href="user_register.php">注册</a>新用户</p>
<?php
    }
?>
<p><b>如果您登录失败</b>, 可能由于以下原因:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>您未登录或登录会话已过期</li>
  <li>您输入了一个错误的密码.
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">取回密码</a></li>
  <?php
  }
  ?>
  <li>您的浏览器不支持javascript</li>
  <li>您的浏览器禁用了cookie</li>
  <li>您的权限不允许您访问该页面</li>
</ul>
