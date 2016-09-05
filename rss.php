<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* This file is part of "TaskFreak! single user" program.                     *
*                                                                            *
* TaskFreak! single user is free software; you can redistribute it and/or    *
* modify it under the terms of the GNU General Public License as published   *
* by the Free Software Foundation; either version 2 of the License, or (at   *
* your option) any later version.                                            *
*                                                                            *
* TaskFreak! single user is distributed in the hope that it will be          *
* useful, but WITHOUT ANY WARRANTY; without even the implied warranty of     *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the              *
* GNU General Public License for more details.                               *
*                                                                            *
* You should have received a copy of the GNU General Public License          *
* along with this program; if not, write to the Free Software                *
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA *
\****************************************************************************/


include './_include.php';

include PRJ_CLASS_PATH.'tzn_generic.php';
include PRJ_CLASS_PATH.TZN_DB_CLASS;
include PRJ_CLASS_PATH.'tzn_user.php';

include PRJ_CLASS_PATH.'pkg_member.php';
include PRJ_CLASS_PATH.'pkg_project.php';

$objItemList = new ItemStats();

// --- check user ---------------------------------------------------------
$pUserIsLoggedIn = false;

$objUser = new Member();

if ($pUserName = Tzn::getReg($_REQUEST['user'],"^[a-zA-Z0-9]+$")) {
	if ($objUser->loadByKey('username',$pUserName)) {
		$pUserIsLoggedIn = $objUser->checkRssCode($_REQUEST['c']);
	}
}
// --- Filter per date -----------------------------------------------------

// show today's tasks

$sqlFilter = '((deadlineDate >= \''
    .strftime(TZN_DATE_SQL,PRJ_DTE_NOW).'\' AND statusKey < '
    .FRK_STATUS_LEVELS.')'.' OR statusKey < '.FRK_STATUS_LEVELS.')';
if (@constant('FRK_NO_DEADLINE_TOO')) {
    // show tasks with no deadline (unplanned tasks)
    $sqlFilter .= ' AND deadlineDate <> \'9999-00-00\'';
} else {
    $sqlFilter = '('.$sqlFilter
    	.' OR (deadlineDate = \'9999-00-00\' AND statusKey < '
        .FRK_STATUS_LEVELS.'))';
}

$objItemList->addDateFilter($sqlFilter);

// --- Filter per user's projects -----------------------------------------

$pOwnOnly = @constant('FRK_DEFAULT_RSS_OWN_ONLY');

if (!$pOwnOnly) {
	$objUserProjectList = new ProjectStats();
	$objUserProjectList->addOrder('statusKey ASC, name ASC');
	$objUserProjectList->addHaving('projectStatus_statusKey < 40');
	$objUserProjectList->loadList($objUser->id,(!$objUser->checkLevel(6)));
	
	// user can only access his own projects
	if ($objUserProjectList->rMore()) {
	        $arrProject = array();
	        while($objTmp = $objUserProjectList->rNext()) {
	            $arrProject[] = $objTmp->id;
	        }
	        $objItemList->addWhere('(ii.projectId IN ('.implode(',',$arrProject).')'
				.' OR ii.memberId = '.$objUser->id.' OR ii.authorId = '
				.$objUser->id.')');
	        unset($arrProject);
	} else {
		$pOwnOnly = true;
	}
}

if ($pOwnOnly) {
	// no project to look at? just list own tasks then!
	$objItemList->addWhere('ii.memberId='.$objUser->id
		.' OR ii.authorId='.$objUser->id);
}

// --- private tasks --------------------------------------------------------

$sqlFilter = '(showPrivate';
if ($objUser->checkLevel(12)) {
    $sqlFilter .= ' < 2';
} else {
    $sqlFilter .= ' = 0';
}
$sqlFilter .= ' OR (showPrivate = 2 AND (ii.authorId = '.$objUser->id
	.' OR ii.memberId = '.$objUser->id.')))';
$objItemList->addWhere($sqlFilter);


// --- Task order ---------------------------------------------------------

$pSort = ($_REQUEST['sort'])?$_REQUEST['sort']:
	((defined('FRK_SORT_COLUMN'))?FRK_SORT_COLUMN:'deadlineDate');
$pDir = ($_REQUEST['dir'])?$_REQUEST['dir']:
	((defined('FRK_SORT_ORDER'))?FRK_SORT_ORDER:1);
$objItemList->setOrder($pSort,$pDir);

// number of items to load

if ($pUserIsLoggedIn && defined('FRK_DEFAULT_RSS_SIZE')) {

    $objItemList->addWhere('ii.memberId='.$objUser->id);
    $objItemList->setPagination(FRK_DEFAULT_RSS_SIZE);
    $objItemList->loadList();
    
}

header('Content-type: text/xml');
echo '<'.'?xml version="1.0"?'.'>';
echo "\n";
?>
<rss version="2.0">
<channel>
<title>TaskFreak! Todo list</title>
<link><?php echo PRJ_WWW_URL; ?></link>
<?php
if ($pUserIsLoggedIn && $objItemList->rMore()) {
    while ($objItem = $objItemList->rNext()) {
        $pProject = '';
        if ($objItem->project->name) {
            $pProject = $objItem->project->get('name').': ';
        }
?>
<item>
<title><![CDATA[<?php echo $pProject.$objItem->title; ?>]]></title>
<?php 
        if ($objItem->deadlineDate != '9999-00-00' || $objItem->description) { 
?>
<description><![CDATA[<?php
            if ($objItem->deadlineDate != '9999-00-00') {
                echo '['.$objItem->getDte('deadlineDate','SHT').'] ';
            }
            if ($objItem->description) {
                echo "\n".$objItem->description;
            }
?>]]></description>
<?php
        }
?>
<link><?php echo PRJ_WWW_URL; ?>?rssId=<?php echo $objItem->id; ?></link>
</item>
<?php
    }

} else {
    include PRJ_INCLUDE_PATH.'language/'.FRK_DEFAULT_LANGUAGE.'/freak.php'; 
?>
<item>
    <title><?php
        if ($pUserIsLoggedIn) {
            echo $langRss['no_task'];
        } else {
            echo $langRss['error_login'];
        }
    ?></title>
    <link><?php echo PRJ_WWW_URL; ?></link>
</item>

<?php
}
?>
</channel>
</rss>
