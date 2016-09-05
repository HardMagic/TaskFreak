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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TaskFreak!<?php if ($pPageTitle) { echo ' '.$pPageTitle; } ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo FRK_CHARSET; ?>" />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="skins/<?php echo FRK_SKIN_FOLDER; ?>/css/freak.css" />
<!--[if gte IE 5.5]>
<![if lt IE 7]>
<style type="text/css">
div#header {
    position: absolute;
    left: expression( ( 0 + ( ignoreMe2 = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft ) ) + 'px' );
    top: expression( ( 0 + ( ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop ) ) + 'px' );
}
</style>
<![endif]>
<![endif]-->
<link rel="stylesheet" type="text/css" href="skins/<?php echo FRK_SKIN_FOLDER; ?>/css/priority<?php echo FRK_PRIORITY_LEVELS; ?>.css" />
<?php
if ($pUserIsLogged) {
?>
<script type="text/javascript" language="Javascript">
var frk_status = <?php echo FRK_STATUS_LEVELS; ?>;
var frk_user = <?php echo $pDefaultUserId; ?>;
var frk_reload = <?php echo ($pAutoReload)?$pAutoReload:0; ?>;
var frk_stay_alive = <?php echo (@constant('FRK_DISCONNECT_ON_TIMEOUT'))?'false':'true'; ?>;
var frk_name = "<?php echo str_replace('"',"\"",$objUser->getName()); ?>";
var frk_priority = <?php echo (defined('FRK_DEFAULT_VISIBILITY'))?FRK_DEFAULT_VISIBILITY:1; ?>;
var frk_loading = new Image();
frk_loading.src = "skins/<?php echo FRK_SKIN_FOLDER; ?>/images/loading.gif";
var frk_refresh = new Image();
frk_refresh.src = "skins/<?php echo FRK_SKIN_FOLDER; ?>/images/refresh.png";
frk_status_close = "<?php if (@constant('FRK_CONFIRM_STATUS_CLOSE')) {
	echo str_replace('"','\"',$GLOBALS['langMessage']['confirm_status_close']); 
}
?>";
</script>
<?php
}
?>
<script type="text/javascript" src="js/common.js"></script>
<?php
// load javascript files
if ($pJScript) {
	$arrJScript = explode(',',$pJScript);
	foreach($arrJScript as $js) {
?>
<script type="text/javascript" src="js/<?php echo trim($js); ?>" language="javascript"></script>
<?php
	}
}
// initialize calendar
if ($pJScalendar) {
?>
<link rel="stylesheet" type="text/css" href="skins/<?php echo FRK_SKIN_FOLDER; ?>/css/calendar.css" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-<?php echo ($langParams['jscalendar'])?$langParams['jscalendar']:'en'; ?>.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.php?format=<?php echo rawurlencode(TZN_DATE_FRM); ?>"></script>
<?php
	if (is_string($pJScalendar)) {
        $arrCalendar = explode(',',$pJScalendar);
        echo '<script>';
        foreach($arrCalendar as $value) {
            $value=trim($value);
            $pJSonLoad .= "Calendar.setup({inputField : '${value}_d',button : '${value}_b'});";
        }
        echo '</script>';
    } else {
        //$pJSonLoad .= 'Calendar.setup({});';
    }
}
$pJSxajax = 'staying_alive,'.$pJSxajax;
if ($pJSxajax) {
    require_once(PRJ_ROOT_PATH."xajax/xajax.inc.php");
    $xajax = new xajax('xajax.task.php');
    $arrXajax = explode(',',$pJSxajax);
    foreach($arrXajax as $value) {
    	if ($value = trim($value)) {
	        $xajax->registerFunction($value);
    	}
    }
    $xajax->printJavascript('xajax'); 
}
?>
<script type="text/javascript" language="JavaScript" src="js/freak.js"></script>
<?php
    if ($pCss) {
        $arrJs = explode(',',$pCss);
        foreach($arrJs as $value) {
?>
<link rel="stylesheet" type="text/css" href="skins/<?php echo FRK_SKIN_FOLDER; ?>/css/<?php echo $value; ?>" />
<?php
        }
    }
?>
<link rel="stylesheet" type="text/css" href="skins/<?php echo FRK_SKIN_FOLDER; ?>/css/print.css" media="print" />
<?php
    if ($pUserIsLogged && @constant('FRK_RSS_SIZE') > 0) {
?>
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php echo PRJ_WWW_URL; ?>rss.php?user=<?php echo $objUser->username; ?>&amp;c=<?php echo $objUser->getRssCode(); ?>" />
<?php
    }
?>
</head>
<body<?php 

    if ($pUserIsLogged) {
        $pJSonLoad .= 'freak_init();';
    }
    $pJSonLoad .= 'freak_label();start_clock();';

    if ($pMessageStatus) {
        $pJSonLoad.="setTimeout('freak_message()',2500);";
    }

    if ($pJSonLoad) echo ' onload="'.$pJSonLoad.'"';
    if ($pJSonDown) echo ' onmousedown="'.$pJSonDown.'"';
?>>
<?php 
if ($pUserIsLogged) { 
?>
<div id="header">
    <form name="zappa" action="index.php" method="post" id="zappa">
		<input type="hidden" name="sProject" value="<?php echo $pProject; ?>" />
        <input type="hidden" name="id" value="<?php echo $objEditItem->id; ?>" />
        <input type="hidden" name="mode" value="save" />
        <input type="hidden" name="sort" value="<?php echo $pSort; ?>" />
    	<input type="hidden" name="dir" value="<?php echo $pDir; ?>" />
        <input type="hidden" name="show" value="<?php echo $pShow; ?>" />
      <div id="header1">
        <div id="userlogout"><a href="logout.php" title="<?php echo $langMenu['logout']; ?>"><img id="frk-logout" src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/logout-off.png" width="13" height="13" border="0" onmouseover="this.src='skins/<?php echo FRK_SKIN_FOLDER; ?>/images/logout-on.png'" onmouseout="this.src='skins/<?php echo FRK_SKIN_FOLDER; ?>/images/logout-off.png'" /></a></div>
        <div id="user">
            <div id="username"><a href="user_edit.php?id=<?php echo $objUser->id; ?>"><?php echo $objUser->getName(); ?></a></div>
            <div id="userdate"><?php echo strftime(TZN_DATETIME_SHX,time()-TZN_TZSERVER+Tzn::_getUserTZ()); ?></div>
        </div>
        <div><a href="<?php echo $_SESSION['linkItems']; ?>"><img src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/logo.png" width="166" height="30" alt="TaskFreak!" border="0" /></a></div>
      </div>
	  <div id="header2">
<?php
// -------------- NAV MENU ---------------------------------------------------
      $pTmpLink = Tzn::concatUrl($_SESSION['linkItems'],'sProject=0');
?>
        <div id="menu">
          <ul id="nav" class="level0">               
            <li><?php echo $langMenu['task']; ?>
              <ul class="level1">
                <?php
                    if ($objUser->checkLevel(11)) {
                ?>
                <li><a href="javascript:freak_new()" accesskey="n"><?php echo $langMenu['new_todo']; ?></a></li>
                <?php
                    }
                ?>
                <li><a href="javascript:freak_print()"><?php echo $langMenu['print_list']; ?></a></li>
              </ul>
            </li>
            <li><?php echo $langMenu['view']; ?>
              <ul id="nav_projects" class="level1">
                <li class="more"><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=today'); ?>" accesskey="l"><?php echo $langMenu['all_projects']; ?></a>
                  <ul>
                    <li><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=future'); ?>" accesskey="f"><?php echo $langMenu['future_tasks']; ?></a></li>
                    <li><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=past'); ?>" accesskey="p"><?php echo $langMenu['past_tasks']; ?></a></li>
                    <li><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=all'); ?>" accesskey="a"><?php echo $langMenu['all_tasks']; ?></a></li>
                  </ul>
                </li>
              <?php
             	while ($objProj = $objUserProjectList->rNext()) {
             		$pTmpLink = Tzn::concatUrl($_SESSION['linkItems'],'sProject='.$objProj->id);
              ?>
                <li class="more"><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=today'); ?>"><?php $objProj->p('name'); ?></a>
                  <ul class="level2">
                    <li><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=future')?>"><?php echo $langMenu['future_tasks']; ?></a></li>
                    <li><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=past')?>"><?php echo $langMenu['past_tasks']; ?></a></li>
                    <li><a href="<?php echo Tzn::concatUrl($pTmpLink,'show=all')?>"><?php echo $langMenu['all_tasks']; ?></a></li>
                  </ul>
                </li>
              <?php
                }
              ?>
              </ul>
            </li>
            <li><?php echo $langMenu['manage']; ?>
              <ul class="level1">
                <li><a href="project_list.php"><?php echo $langMenu['projects']; ?></a></li>
                <?php
                if ($objUser->checkLevel(1)) {
                ?>
                <li><a href="user_list.php"><?php echo $langMenu['users']; ?></a></li>
                <?php
                }
                ?>
                <li><a href="user_edit.php?id=<?php echo $objUser->id; ?>"><?php echo $langMenu['preferences']; ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div id="rightmenu">
            <a href="<?php echo Tzn::concatUrl($_SESSION['linkItems'],'sUser='.$objUser->id); ?>"><?php echo $langMenu['my_tasks']; ?></a> | 
            <a href="<?php echo Tzn::concatUrl($_SESSION['linkItems'],'sUser=all'); ?>"><?php echo $langMenu['all_users']; ?></a> | 
            <?php
                if ($objUser->checkLevel(1)) {
                    $objUserList->qSelect('sUser','getShortName()',$_SESSION['selUser'],
                        $langMenu['all_users'],'','onChange="this.form.submit()"');
                    $objUserList->rReset();
                    echo ' | ';
                }
                if (@constant('FRK_CONTEXT_ENABLE')) {
                    $objContextList = new ItemContextList();
                    $objContextList->qSelect('sContext',$pContext,$langMenu['all_contexts'],'','onChange="this.form.submit()"');
				}
            ?>
            <a id="lnkRefresh" href="<?php echo $_SESSION['linkItems']; ?>" title="<?php echo $langMenu['reload']; ?>"><img id="frk_status" src="skins/<?php echo FRK_SKIN_FOLDER; ?>/images/loading.gif" width="14" height="14" border="0" /></a>
        </div>
	  </div>
      <?php

// ------------ ERROR / INFO MESSAGE -------------------------------------

		if ($pMessageStatus) {
            if (ereg('ERROR:',$pMessageStatus)) {
                $messStyle = ' class="error"';
                $pMessageStatus = substr($pMessageStatus,6);
            } else {
                $messStyle = '';
            }
            echo '<div id="message"'.$messStyle.'>'.nl2br($pMessageStatus).'</div>';
            unset($messStyle,$pMessageStatus);
		}

        if (strpos($_SERVER['PHP_SELF'],'index.php')) {
            include PRJ_INCLUDE_PATH.'html/panel_task.php';
        }

?>
    </form>
</div>
<?php
}
?>
<div id="container">
