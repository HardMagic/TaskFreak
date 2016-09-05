<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

include '_common.php';

/* --- LOAD ISSUE LIST ------------------------------------------------------ */

$objItemList = new ItemStats();

// filter task
if ($pProject) {
    // load tasks for specific project
	$objItemList->addWhere('ii.projectId = \''.$pProject.'\'');
    $pLink=Tzn::concatUrl($pLink,'sProject='.$pProject);
} else if (!$objUser->checkLevel(6)) {
    // user can only access his own projects
    if ($objUserProjectList->rMore()) {
        $arrProject = array();
        while($objTmp = $objUserProjectList->rNext()) {
            $arrProject[] = $objTmp->id;
        }
        $objItemList->addWhere('(ii.projectId IN ('.implode(',',$arrProject).') OR ii.memberId = '.$objUser->id.')');
        unset($arrProject);
        $objUserProjectList->rReset();
    } else {
        // no project to look at? just list own tasks then!
        $objItemList->addWhere('ii.memberId='.$objUser->id);
    }
}

if ($pUser = intval($_REQUEST['sUser'])) {
	$objItemList->addWhere('ii.memberId = \''.$pUser.'\'');
    $pLink=Tzn::concatUrl($pLink,'sUser='.$pUser);
    $_SESSION['selUser'] = $pUser;
} else {
    unset($_SESSION['selUser']);
    session_unregister('selUser');
}

if ($_REQUEST['sContext']) {
	$pContext = $_REQUEST['sContext'];
	$objItemList->addWhere('context = \''.$pContext.'\'');
    $pLink=Tzn::concatUrl($pLink,'sContext='.$pContext);
}

$sqlFilter = '';
$pShow = ($_REQUEST['show'])?$_REQUEST['show']:'today';
$pLink=Tzn::concatUrl($pLink,'show='.$pShow);

$pKeepNoDead = intval(@constant('FRK_NO_DEADLINE_KEEP') -1) * 86400;

// date filter

switch ($pShow) {
	case 'all':
		break;
	case 'future':
		// show coming tasks and late tasks (undone only)
		$sqlFilter = '((deadlineDate >= \''
			.strftime(TZN_DATE_SQL,PRJ_DTE_NOW).'\' AND statusKey < '
			.FRK_STATUS_LEVELS.')'.' OR statusKey < '.FRK_STATUS_LEVELS.')';
		if (@constant('FRK_NO_DEADLINE_TOO')) {
			// don't show tasks with no deadline (unplanned)
			$sqlFilter .= ' AND deadlineDate <> \'9999-00-00\'';
		} else {
			$sqlFilter .= ' OR (deadlineDate = \'9999-00-00\' AND statusKey < '
				.FRK_STATUS_LEVELS.')';
		}
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
		break;
	default:
		break;
}

//echo '<p>&</p><p>-</p><p>-</p>'.$sqlFilter;

if ($sqlFilter) {
	$objItemList->addDateFilter($sqlFilter);
}

// private!
$sqlFilter = '(showPrivate';
if ($objUser->checkLevel(12)) {
    $sqlFilter .= ' < 2';
} else {
    $sqlFilter .= ' = 0';
}
$sqlFilter .= ' OR (showPrivate = 2 AND ii.authorId = '.$objUser->id.'))';
$objItemList->addWhere($sqlFilter);

// --- ordering statement ---

$pSort = ($_REQUEST['sort'])?$_REQUEST['sort']:
	((defined('FRK_SORT_COLUMN'))?FRK_SORT_COLUMN:'deadlineDate');
$pDir = ($_REQUEST['dir'])?$_REQUEST['dir']:
	((defined('FRK_SORT_ORDER'))?FRK_SORT_ORDER:1);
//if ($pShow == 'past' && (!$_REQUEST['dir']) && $pDir == 1) $pDir = -$pDir;
$objItemList->setOrder($pSort,$pDir);

$pLink=Tzn::concatUrl($pLink,'sort='.$pSort);
$pLink=Tzn::concatUrl($pLink,'dir='.$pDir);

// --- load ---
$objItemList->loadList($objUser->id);

/* --- HTML ----------------------------------------------------------------- */

include PRJ_INCLUDE_PATH.'html/header.php';

?>
<h1 class="printheader"><?php echo $objUser->getName(); ?>'s task list</h1>
<div id="content">
	<?php
		while ($objItem = $objItemList->rNext()) {
	?>
		<div class="printbox">
			<h2><?php $objItem->p('title'); ?></h2>
			<table cellpadding="1" cellspacing="0" border="0" width="100%">
                <tr>
                    <td colspan="4"><?php echo $langForm['project']; ?>: <strong><?php $objItem->project->p('name','-'); ?></strong></td>
                </tr>
				<tr>
					<td width="15%"><?php echo $langForm['priority']; ?>: <strong><?php echo $objItem->priority; ?></strong></td>
					<td width="35%"><?php echo $langForm['user']; ?>: <strong><?php echo $objItem->member->getName('-'); ?></strong></td>
					<td width="35%"><?php echo $langForm['deadline']; ?>: <strong><?php $objItem->p('deadlineDate','SHX','-'); ?></strong></td>
					<td width="15%"><?php echo $langForm['status']; ?>: <strong><?php $objItem->pStatus(); ?></strong></td>
				</tr>
			</table>
            <div class="description"><?php echo $objItem->p('description'); ?></div>
		</div>
	<?php
		}
	?>
	<p>&nbsp;</p>
</div>
<?php
include PRJ_INCLUDE_PATH.'html/footer.php';
?>
