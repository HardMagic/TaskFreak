<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.4                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Eğer üye değilseniz</b> ve olmak istiyorsanız, <a href="user_register.php">buradan başvurabilirsiniz</a>.</p>
<?php
    }
?>
<p><b>Eğer giriş sorunları yaşıyorsanız</b>, muhtemel nedenler aşağıda listelenmiştir:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Bağlantınız zaman aşımını uğramış olabilir</li>
  <li>Acaba yanlış bir şifre mi girdiniz? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Email adresinize yeni şifre gönderelim</a></li>
  <?php
  }
  ?>
  <li>Tarayıcınız javascript desteği vermiyor olabilir</li>
  <li>Tarayıcınız cookie (çerez) kullanımına izin vermiyor olabilir</li>
  <li>Ulaşmak istediğiniz sayfaya yetkiniz olmayabilir</li>
</ul>
