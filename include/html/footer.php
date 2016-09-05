<?php
if ($pPageIsPublic && (ereg('(log(in|out)|user_password)\.php',$_SERVER['PHP_SELF']))) {
?>
</div>
<div id="footer" class="butt">
    <a href="http://www.taskfreak.com">TaskFreak! multi user</a> v<?php echo FRK_VERSION; ?> - Released on <?php echo FRK_VERSION_RELEASE; ?> under GNU General Public License
</div>
<?php
} else {
?>
    <div id="footer" style="margin:30px;">
    <?php
    if (@is_dir('install')) {
        echo '<p class="tznError"><b>'.$GLOBALS['langMenu']['warning'].':</b> '.$GLOBALS['langMenu']['warning_install'].'</p>';
    }
    ?>
        <a href="http://www.taskfreak.com">TaskFreak! multi user</a> v<?php echo FRK_VERSION; ?> - Released on <?php echo FRK_VERSION_RELEASE; ?> under GNU General Public License
    </div>
</div>
<?php
}   
?>
</body>
</html>
