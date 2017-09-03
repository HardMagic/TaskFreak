<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.4                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

define('TZN_DB_HOST','localhost');
define('TZN_DB_USER','wp_user');       // edit here
define('TZN_DB_PASS',')NfvEd#JH$kQ7).B');           // edit here
define('TZN_DB_BASE','wordpress');  // edit here
define('TZN_DB_PREFIX','frk');
define('TZN_DB_CLASS','tzn_mysql.php');

define('TZN_DB_DEBUG',2);
define('TZN_DB_PERMANENT',0);

define('TZN_DEBUG',0);
define('TZN_SPECIALCHARS',2);
define('TZN_HTMLMODE','html');
define('TZN_BOOL_TRUE','<img src="images/check_yes.png" width="12" height="13" border="0" />');
define('TZN_BOOL_FALSE','<img src="images/check_no.png" width="12" height="13" border="0" />');
define('TZN_TZDEFAULT','user');
define('TZN_DATEFIELD','SQL');
define('TZN_TRANS_ID',1);
define('TZN_TRANS_STATUS',1);

define('TZN_DB_ASC_OFF','images/o_asc.png');
define('TZN_DB_ASC_ON','images/o_asc_on.png');
define('TZN_DB_DESC_OFF','images/o_desc.png');
define('TZN_DB_DESC_ON','images/o_desc_on.png');
define('TZN_DB_PAGING_OFF','');
define('TZN_DB_PAGING_ON','');
define('TZN_DB_PAGING_ENABLED','tznPagingEnabled');
define('TZN_DB_PAGING_DISABLED','tznPagingDisabled');
define('TZN_DB_ERROR_PAGE','error.php');

define('TZN_USER_ID_LENGTH',8);		// length of room/user ID
define('TZN_USER_LOGIN','username');// Login mode = username OR email
define('TZN_USER_NAME_MIN',3);		// minimum length for username
define('TZN_USER_NAME_MAX',10);		// maximum length for username
define('TZN_USER_PASS_MIN',3);		// minimum length for password
define('TZN_USER_PASS_MAX',10);		// maximum length for password
define('TZN_USER_PASS_MODE',4);

define('TZN_FILE_RANDOM',false);
define('TZN_FILE_GD_VERSION',2);
define('TZN_FILE_GD_QUALITY',65);

if (@is_dir('./include')) {
    define('PRJ_ROOT_PATH','./');
} else {
    define('PRJ_ROOT_PATH','../');
}
define('PRJ_INCLUDE_PATH',PRJ_ROOT_PATH.'include/');
define('PRJ_CLASS_PATH',PRJ_INCLUDE_PATH.'classes/');
define('PRJ_WWW_PATH',PRJ_ROOT_PATH.'/');

define('TZN_FILE_ICONS_PATH',PRJ_WWW_PATH.'icons/');
define('TZN_FILE_ICONS_URL','icons/');
define('TZN_FILE_TEMP_PATH',PRJ_WWW_PATH.'temp/');
define('TZN_FILE_TEMP_URL','temp/');
define('TZN_FILE_UPLOAD_PATH',PRJ_WWW_PATH.'files/');
define('TZN_FILE_UPLOAD_URL','files/');

// uncomment the following if you have slashes added before quotes in submitted input
// define('TZN_MAGIC_FIX',TRUE);

define('PRJ_WWW_URL','http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

// === TASKFREAK CUSTOMIZATION ================================

define('FRK_VERSION','0.8.0');
define('FRK_VERSION_RELEASE','2010-06-27');

define('FRK_MYSQL_VERSION_GT_4_1',FALSE);

// number of priority levels
define('FRK_PRIORITY_LEVELS',9);	// 3, 5 or 9
// how many levels to get status at 100%
define('FRK_STATUS_LEVELS',5);		// 1 to 5
// add column context
define('FRK_CONTEXT_ENABLE',TRUE);	// TRUE or FALSE
// add description to tasks / todos
define('FRK_DESCRIPTION_ENABLE',TRUE);		// TRUE OR FALSE
// default user's country
define('FRK_DEFAULT_COUNTRY','FR');
// charset (for unicode support)
define('FRK_CHARSET','UTF-8');
// use only if you have encoding/utf8 problems
define('TZN_FORCE_UTF-8',FALSE);

// authorize auto login
define('PRJ_AUTO_LOGIN',true);
// enable password reminder
define('PRJ_PASSWORD_REMINDER',false);
// enable registration process (0=no, 1=activation by admin, 2=user gets activation email)
define('PRJ_REGISTRATION',0);

// sort order by default (also used for RSS field)
define('FRK_DEFAULT_SORT_COLUMN','deadlineDate'); // deadlineDate, priority, project...
define('FRK_DEFAULT_SORT_ORDER',1); // 1 = Ascending, -1 = Descending
// language of the interface
define('FRK_DEFAULT_LANGUAGE','en');	// en, fr, it, de, nl, da, zh, pl
// TaskFreak! skin
define('FRK_DEFAULT_SKIN_FOLDER','redfreak'); // or bluefreak
// show own tasks or all users' tasks by default
define('FRK_DEFAULT_VIEW_OWN_TASKS',FALSE);
// limit number of tasks to show at once (applies to today's task view only)
define('FRK_DEFAULT_CURRENT_TASKS',0); // 0 = no limit
// includes tasks with no deadline by default or not
define('FRK_DEFAULT_NO_DEADLINE_TOO',TRUE);	// TRUE or FALSE 
// when task is marked as done, keep in task list for X days
define('FRK_DEFAULT_NO_DEADLINE_KEEP',0);	// number of days 
// deadline: displays day of the week (or tomorrow) or '1 day'
define('FRK_DEFAULT_DATEDIFF_MODE','day');	// day or diff or date
// deadline: displays 'tomorrow' for next day 
define('FRK_DEFAULT_DATEDIFF_TOMORROW',TRUE); // TRUE or FALSE
// show full text (true) or icons (false)
define('FRK_DEFAULT_CONTEXT_LONG',FALSE);	// TRUE or FALSE
// number of items in RSS file (set to 0 if you don't want to enable RSS)
define('FRK_DEFAULT_RSS_SIZE',8);
// show own tasks only, or all users' tasks in rss
define('FRK_DEFAULT_RSS_OWN_ONLY',FALSE);
// default visibility
define('FRK_DEFAULT_VISIBILITY',1); // 0 = public, 1 = internal, 2 = private
// default comment order
define('FRK_DEFAULT_COMMENT_ORDER','ASC');
// update deadline on completed
define('FRK_COMPLETE_DEADLINE',TRUE);
// US date format mm/dd (eg. 14th may = 5/14 vs. 14/5)
define('TZN_DATE_US_FORMAT',FALSE);
// do you need confirmation when setting task as completed (from task list)
define('FRK_CONFIRM_STATUS_CLOSE',TRUE);
// do not keep user connected (disable background ajax request)
define('FRK_DISCONNECT_ON_TIMEOUT',FALSE); // false = keep connected, true = kick out when session times out
// would the page reload for real every X minutes?
define('FRK_RELOAD_FOR_REAL',10);
// hide far future tasks (number of days)
define('FRK_DEFAULT_FAR_FUTURE_HIDE',0);

// === DATE FORMATS ===========================================
define("TZN_DATE_SHT","%d %b %y");
define("TZN_DATE_SHX","%a %d %b %y");
define("TZN_DATE_LNG","%d %B %Y");
define("TZN_DATE_LNX","%A %d %B %Y");
define("TZN_DATETIME_EUR","%d/%m/%y %H:%M");
define("TZN_DATETIME_USA","%m/%d/%y %I:%M%p");
define("TZN_DATETIME_SHT","%d %b %y %H:%M");
define("TZN_DATETIME_SHX","%a %d %b %y %H:%M");
define("TZN_DATETIME_LNG","%d %B %Y, %H:%M");
define("TZN_DATETIME_LNX","%A %d %B %Y, %H:%M");

// === CONTEXTS ===============================================

$GLOBALS['confContext'] = array(
    1 => '#939',
    2 => '#c33',
    3 => '#66f',
    4 => '#090',
    5 => '#963',
    6 => '#39c',
    7 => '#3c9',
    8 => '#999'
);

// === ACCESS RIGHTS ==========================================

// Change access rights settings with care.
// A switch with value 0 means right is not given
// A switch with value 1 means right is given
// Example #1: the 3rd switch on confProjectRights sets the right for a
// user to edit (modify) any comment to a task belonging to a project he's
// associated with.
// Example #2: the 10th switch in confGlobalRights sets the right for a user
// to change the status of any project, whatever he's associated with it or not

$GLOBALS['confProjectRights'] = array(
	0 => '00000', // user not associated to project
	1 => '100000000000000',	// extern
	2 => '110000000000000',	// official
	3 => '110001000000000', // member
	4 => '111101111011000',	// moderator
	5 => '111111111111111'	// leader
);
// These are rights of users associated with a specific project
// comments: 1:see all, 2:add new comment, 3:edit any, 4:delete any
// tasks   : 6:create new, 7:edit any, 8:change status, 9:delete any, 10: view tasks
// project : 11:manage users, 12:change status, 13:edit info, 14:delete

$GLOBALS['confGlobalRights'] = array(
	1 => '000000000000000',	// guests
	2 => '100000000011100',	// intern
	3 => '110000100111100',	// manager
	4 => '111111111111111'	// administrator
);
// These are global rights of user over the entire application
// users:  : 1:see all, 2:create new, 3:edit any, 4:delete any
// projects: 6:see all, 7:create new, 8:edit any, 9:delete any, 10:change status
// misc #1 : 11:create own tasks, 12:view internal tasks, 13:view public tasks
// misc #2 : 14:edit any task, 15:system settings

define('FRK_PROJECT_LEADER',count($GLOBALS['confProjectRights']) - 1); // don't touch this
