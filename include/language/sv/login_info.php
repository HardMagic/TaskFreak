<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user  - Swedish language, sunday version...                          *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Marcus Persson <marcus (at) gazebo.se>                            *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Om du inte är en medlem</b> men önskar att bli en, <a href="user_register.php">gör en förfrågan här</a>.</p>
<?php
    }
?>
<p><b>Om du har problem med att logga in</b>, kan det bero på följande anledningar:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Du är inte inloggad eller så har din sektion förfallit</li>
  <li>Du ar fyllt i ett felaktigt lösenord?
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Gör en förfrågan om ett nytt via e-post</a></li>
  <?php
  }
  ?>
  <li>Din webbläsare stödjer inte javascript</li>
  <li>Din webbläsare stödjer inte eller har inaktiverat cookies</li>
  <li>Du ar inte tillräckligt med rättigheter för att få tillgång till begärd sida</li>
</ul>
