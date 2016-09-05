<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* This file is part of "TaskFreak! multi user" program.                      *
*                                                                            *
* TaskFreak! multi user is free software; you can redistribute it and/or     *
* modify it under the terms of the GNU General Public License as published   *
* by the Free Software Foundation; either version 2 of the License, or (at   *  
* your option) any later version.                                            *
*                                                                            *
* TaskFreak! multi user is distributed in the hope that it will be           *
* useful, but WITHOUT ANY WARRANTY; without even the implied warranty of     *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
* GNU General Public License for more details.                               *
*                                                                            *
* You should have received a copy of the GNU General Public License          *
* along with this program; if not, write to the Free Software                *
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA *
\****************************************************************************/

$pPageIsPublic = true;
include '_common.php';

$objEditItem = new Item();
$pUserCanEdit = false;

// --- LOAD TASKS -----------------------------------------------

$pLink = 'index.php';

$objItemList = new ItemStats();

// --- filter: projects ---

$arrProject = array(); // show all project
// $arrProject = array(1); // show only tasks from project with ID=1
// $arrProject = array(1,2); // show only tasks from project with ID=1 or ID=2


if (count($arrProject)) {
	$objItemList->addWhere('ii.projectId IN ('.implode(',',$arrProject).')');
}

// --- filter: context ---

if ($_REQUEST['sContext']) {
	$pContext = $_REQUEST['sContext'];
	$objItemList->addWhere('context = \''.$pContext.'\'');
    $pLink=Tzn::concatUrl($pLink,'sContext='.$pContext);
}

$sqlFilter = '';
$pShow = ($_REQUEST['show'])?$_REQUEST['show']:'today';
$pLink=Tzn::concatUrl($pLink,'show='.$pShow);

$pKeepNoDead = intval(@constant('FRK_NO_DEADLINE_KEEP') -1) * 86400;

// --- Filter per date -----------------------------------------------------

switch ($pShow) {
	case 'all':
		break;
	case 'future':
		// show coming tasks and late tasks (undone only)
		$sqlFilter = '((deadlineDate >= \''
			.strftime(TZN_DATE_SQL,PRJ_DTE_NOW).'\' AND statusKey < '
			.FRK_STATUS_LEVELS.')'.' OR statusKey < '.FRK_STATUS_LEVELS.')';
        // show uncompleted tasks with no deadline
		$sqlFilter .= ' OR (deadlineDate = \'9999-00-00\' AND statusKey < '
			.FRK_STATUS_LEVELS.')';
		break;
	case 'past':
		// show past tasks and already done
		$sqlFilter = '(deadlineDate < \''
			.strftime(TZN_DATE_SQL,PRJ_DTE_NOW).'\' OR statusKey = '
			.FRK_STATUS_LEVELS.')';
		break;
	case 'today':
		// show all future tasks (done + undone) and late tasks
		$pKeepNoDead = intval(@constant('FRK_NO_DEADLINE_KEEP') -1) * 86400;
		$sqlFilter = '(statusKey = '.FRK_STATUS_LEVELS.' AND statusDate > \''
			.gmdate('Y-m-d 00:00:00',time()-$pKeepNoDead).'\') ';
		if (@constant('FRK_NO_DEADLINE_TOO')) {
			// show tasks with no deadline
			$sqlFilter .= ' OR statusKey < '.FRK_STATUS_LEVELS;
		} else{
			// don't show uncompleted non planned tasks
            $sqlFilter .= ' OR (deadlineDate <> \'9999-00-00\' AND statusKey < '.FRK_STATUS_LEVELS.')';
		}
        if (@constant('FRK_DEFAULT_CURRENT_TASKS')) {
            $objItemList->setPagination(FRK_DEFAULT_CURRENT_TASKS);
        }
		break;
	default:
		break;
}

// -TODO- Add filter current project only (no completed, no cancelled)

//echo '<p>&</p><p>-</p><p>-</p>'.$sqlFilter;

if ($sqlFilter) {
	$objItemList->addDateFilter($sqlFilter);
}

// --- private tasks --------------------------------------------------------
$objItemList->addWhere('showPrivate=0');

// --- Task order ---------------------------------------------------------

$pSort = ($_REQUEST['sort'])?$_REQUEST['sort']:
	((defined('FRK_SORT_COLUMN'))?FRK_SORT_COLUMN:'deadlineDate');
$pDir = ($_REQUEST['dir'])?$_REQUEST['dir']:
	((defined('FRK_SORT_ORDER'))?FRK_SORT_ORDER:1);
//if ($pShow == 'past' && (!$_REQUEST['dir']) && $pDir == 1) $pDir = -$pDir;
$objItemList->setOrder($pSort,$pDir);

$pLink=Tzn::concatUrl($pLink,'sort='.$pSort);
$pLink=Tzn::concatUrl($pLink,'dir='.$pDir);

$_SESSION['linkItems'] = $pLink;

// --- load ---
$objItemList->loadList($objUser->id);


// === HTML ===================================================================

$pJScalendar=true; //'freak_cal';
$pJSonLoad='freak_highlist();';
$pJSonDown='listenClick(event);';
$pJSxajax='task_load_view,task_load_more,task_load_edit,task_load_users,'
	.'task_update_status,task_update_full,task_delete,'
	.'task_comment_edit,task_comment_delete,task_update_comment' ;
	
// open task directly
if ($rssId = intval($_REQUEST['rssId'])) {
	$pJSonLoad .= 'freak_view('.$rssId
		.(($_REQUEST['tab'])?',\''.$_REQUEST['tab'].'\'':'')
		.');';
}

$pAutoReload = (@constant('FRK_RELOAD_FOR_REAL'))?FRK_RELOAD_FOR_REAL:0;
	
// ==== HTML ===============================================================

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TaskFreak!</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="skins/redfreak/css/freak.css" />
<link rel="stylesheet" type="text/css" href="skins/redfreak/css/priority9.css" />
<script type="text/javascript" language="JavaScript" src="js/freak.js"></script>
<link rel="stylesheet" type="text/css" href="skins/redfreak/css/print.css" media="print" />
</head>
<body>
<div id="header">
	<div id="header1">
		<div>
			<img src="skins/redfreak/images/logo.png" alt="TaskFreak!" border="0" height="30" width="166" />
		</div>
	</div>
	<div id="header2">&nbsp;</div>
</div>
<div id="container">
    <div id="content">
        <table id="taskSheet" cellpadding="2" cellspacing="1" border="0" class="sheet" width="100%">
            <thead>
                <tr>
                    <th width="2%" class="sortable">&nbsp;</th>
                    <?php
                        $titleWidth = 0;
                        $titleLabel = '&nbsp;';
                        if (@constant('FRK_CONTEXT_ENABLE')) {
                            if (@constant('FRK_CONTEXT_LONG')) {
                                $titleWidth = 10;
                                $titleLabel = $GLOBALS['langForm']['context'];
                            } else {
                                $titleWidth = 2;
                            }
                    ?>
                    <th width="<?php echo $titleWidth; ?>%" onclick="freak_sort('context')" class="sortable"><?php echo $titleLabel; ?></th>
                    <?php
                        }

                    ?>
                    <th width="<?php echo 25-(FRK_STATUS_LEVELS * 2) ?>%" class="sortable"><?php echo $langForm['project']; ?></th>
                    <th width="<?php echo 53-$titleWidth; ?>%" class="sortable"><?php echo $langForm['title']; ?></th>
                    <th width="10%" class="sortable"><?php echo $langForm['user']; ?></th>
					<th width="10%" class="sortable"><?php echo $langForm['deadline']; ?></th>
                    <th width="<?php echo FRK_STATUS_LEVELS * 2; ?>%" colspan="<?php echo FRK_STATUS_LEVELS ?>" class="sortable"><?php echo (FRK_STATUS_LEVELS == 1)?'X':$langForm['status']; ?></th>
                </tr>
            </thead>
            <tbody>
<?php

// ----------- TASK LIST (CONTENT) -------------------------------------------

if ($objItemList->rMore()) {
    while ($objItem = $objItemList->rNext()) {
        $priority = $objItem->priority;
?>
                <tr id="<?php echo $objItem->id; ?>">
                    <td id="eprio<?php echo $objItem->id; ?>" class="prio"><span class="pr<?php echo $priority; ?>" title="<?php echo $_GLOBALS['arrPriorities'][$objItem->priority]; ?>"><?php echo $priority; ?></span></td>
                <?php
                    if (@constant('FRK_CONTEXT_ENABLE')) {
                ?>
                    <td id="ectxt<?php echo $objItem->id; ?>" class="<?php echo (@constant('FRK_CONTEXT_LONG'))?'ctlg':'ctsh'; ?>"><?php echo $objItem->getContext(@constant('FRK_CONTEXT_LONG')); ?></td>
                    <?php
                    }
                ?>
                    <td id="eproj<?php echo $objItem->id; ?>"><?php $objItem->project->p('name','-'); ?></td>
                    <td id="etitl<?php echo $objItem->id; ?>"><?php 
                        echo $objItem->p('title'); 
                        if ($objItem->description) {
                            echo '<img src="skins/'.FRK_SKIN_FOLDER.'/images/desc.png" width="16" height="16" align="absmiddle" border="0" alt="" />';
                        }
                        switch ($objItem->showPrivate) {
                            case 1:
                                echo '<img src="skins/'.FRK_SKIN_FOLDER.'/images/priv1.png" width="12" height="16" align="absmiddle" border="0" alt="" />';
                                break;
                            case 2:
                                echo '<img src="skins/'.FRK_SKIN_FOLDER.'/images/priv2.png" width="12" height="16" align="absmiddle" border="0" alt="" />';
                                break;
                        }
                    ?></td>
                    <td id="euser<?php echo $objItem->id; ?>"><?php echo $objItem->member->getShortName('-'); ?></td>
					<td id="edead<?php echo $objItem->id; ?>"><?php echo $objItem->pDeadline(); ?></td>
                <?php
                    $s = $objItem->itemStatus->statusKey;
                    for ($i = 0; $i < FRK_STATUS_LEVELS; $i++) {
                        $j = ($i < $s)?(FRK_STATUS_LEVELS - $i):0;
                ?>
                    <td id="est<?php echo ($i+1).$objItem->id; ?>" class="sts<?php echo $j; ?>"<?php
                        if ($objUser->checkLevel(14) || $objItem->checkRights($objUser->id,8,true))  {
                            echo ' onclick="freak_sts('.$objItem->id.','.($i+1).')" style="cursor:pointer"';
                        }
                    ?>>&nbsp;</td>
                <?php
                    }
                ?>
                </tr>
<?php
    }
} else {

// --------------- NO TASK FOUND ---------------------------------------------

?>
                <tr class="nothanks">
                    <td colspan="<?php echo (@constant('FRK_CONTEXT_ENABLE'))?'8':'7'; ?>">
                        <p>&nbsp;</p>
                        <p align="center">- <?php echo $langMessage['no_task_found']; ?> -</p>
                        <?php
                            if ($objUser->checkLevel(11)) {
                        ?>
                        <p align="center"><a href="javascript:freak_new()"><?php echo $langMessage['create_task']; ?></a></p>
                        <?php
                            }
                        ?>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
<?php
}
?>
            </tbody>
        </table>
    </div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
