<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Po Ming <poming168@gmail.com>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> '新方案',           // 0 is for new project
	10	=> '計劃中',      // anything between 0 and 40
	20 	=> '進行中',   // is free to be customized
	40	=> '已完成',     // anything 40 and over
	50	=> '已取消'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> '訪客',	// see only, no action
	2	=> '官員',	// add comments
	3	=> '成員',	// add tasks, add comments, task status
	4	=> '編輯', // add/edit all tasks, comments, project members and status
	5	=> '經理'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> '客人',     // access own projects, view only public tasks
	2	=> '內部人員',    // access own projects, create projects, create tasks
	3	=> '管理員',   // access own projects, create projects, tasks
	4	=> '超級管理員' // everything
);

// task (item) status
$GLOBALS['langItemStatus'] = array(
	0	=> '0%',
	1	=> '20%',
	2	=> '40%',
	3	=> '60%',
	4	=> '80%',
	5	=> '100%'
);

// contexts

$GLOBALS['langItemContext'] = array (
	1 => '工作',
	2 => '會議',
	3 => '文檔',
	4 => '網絡',	
	5 => '電話',
	6 => '電郵',
	7 => '家務',
	8 => '其他'
);

$GLOBALS['langItemPriority'] = array (
	1 => '緊急',
	2 => '高優先級',
	3 => '中優先級',
	4 => '普通優先級',	
	5 => '低優先級',
	6 => '更低優先',
	7 => '很低優先',
	8 => '最低優先級',
	9 => '無'
);
?>
