<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Jei jûs nesate narys</b> bet norëtø tapti tokiu, <a href="user_register.php">praðykite èia</a>.</p>
<?php
    }
?>
<p><b>Jei jûs turite problem7 kai jungetes</b>, tai galëtø bûti dël vienos ið ðiø prieþasèiø:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Jûs nesate registruotas, ar jûsø sesija baigësi</li>
  <li>Jûs ávëdëte neteisingà slaptaþodá? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Praðykite naujo elektroniniu paðtu</a></li>
  <?php
  }
  ?>
  <li>Jûsø narðyklë nepalaiko javascript</li>
  <li>Jûsø narðyklë neleidþia sausainëliø(cookies)</li>
  <li>Jûs neturite pakankamai prieigos teisiø gauti prieigà prie puslapio.</li>
</ul>
