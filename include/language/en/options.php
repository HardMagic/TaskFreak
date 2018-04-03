<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'New',           // 0 is for new project
	10	=> 'Proposal',      // anything between 0 and 40
	20 	=> 'In Progress',   // is free to be customized
	40	=> 'Completed',     // anything 40 and over
	50	=> 'Cancelled'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'visitor',	// see only, no action
	2	=> 'official',	// add comments
	3	=> 'member',	// add tasks, add comments, task status
	4	=> 'moderator', // add/edit all tasks, comments, project members and status
	5	=> 'leader'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'guest',     // access own projects, view only public tasks
	2	=> 'member',    // access own projects, create projects, create tasks
	3	=> 'manager',   // access own projects, create projects, tasks
	4	=> 'administrator' // everything
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
	1 => 'Work',
	2 => 'Philanthropy',
	3 => 'Rest',
	4 => 'Awaken',	
	5 => 'Nourish',
	6 => 'Social',
	7 => 'Create',
	8 => 'Mastery'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Urgent!',
	2 => 'High priority',
	3 => 'Medium priority',
	4 => 'Normal priority',	
	5 => 'Low priority',
	6 => 'Practice',
	7 => 'Play',
	8 => 'Think Tank',
	9 => 'Dream'
);

