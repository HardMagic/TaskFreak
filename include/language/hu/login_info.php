<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.5                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


    if (@constant('PRJ_REGISTRATION')) {
?>
<p><b>Ha Ön még nem tag</b> de szeretne az lenni, <a href="user_register.php">kérjen hozzáférést itt</a>.</p>
<?php
    }
?>
<p><b>Ha a bejelentkezés során gondjai vannak</b>, annak a követekező okai lehetnek:</p>
<ul style="margin:-10px 0px 0px 40px;padding:0px">
  <li>Nem jelentkezett be vagy lejárt a bejelentkezési idő</li>
  <li>Rossz jelszót adott meg? 
  <?php
  if (@constant('PRJ_PASSWORD_REMINDER')) {
  ?>
  <a href="user_password.php">Új jelszót e-mailben kérhet</a></li>
  <?php
  }
  ?>
  <li>Az Ön böngészője nem támogatja a javascriptet</li>
  <li>Az Ön böngészője nem engedélyezi a sütiket</li>
  <li>Nincs megfelelő jogosultsága az oldal megtekintéséhez</li>
</ul>
