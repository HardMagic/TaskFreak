<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Wang Yingqi <wangyingqi@gmail.com>                          *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> '初期',           // 0 is for new project
	10	=> '完善',      // anything between 0 and 40
	20 	=> '进行',   // is free to be customized
	40	=> '已完',     // anything 40 and over
	50	=> '已取'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> '访客',	// see only, no action
	2	=> '官员',	// add comments
	3	=> '成员',	// add tasks, add comments, task status
	4	=> '编辑', // add/edit all tasks, comments, project members and status
	5	=> '经理'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> '客人',     // access own projects, view only public tasks
	2	=> '内部人员',    // access own projects, create projects, create tasks
	3	=> '管理员',   // access own projects, create projects, tasks
	4	=> '超级管理员' // everything
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
	2 => '会议',
	3 => '文档',
	4 => '网络',	
	5 => '电话',
	6 => '电邮',
	7 => '家务',
	8 => '其他'
);

$GLOBALS['langItemPriority'] = array (
	1 => '紧急',
	2 => '高优先级',
	3 => '中优先级',
	4 => '普通优先级',	
	5 => '低优先级',
	6 => '更低优先',
	7 => '很低优先',
	8 => '最低优先级',
	9 => '无'
);
?>
