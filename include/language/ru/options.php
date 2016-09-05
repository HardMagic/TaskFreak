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
	0 	=> 'Новый',           // 0 is for new project
	10	=> 'Предложение',      // anything between 0 and 40
	20 	=> 'В процессе',   // is free to be customized
	40	=> 'Завершен',     // anything 40 and over
	50	=> 'Отменен'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'посетитель',	// see only, no action
	2	=> 'служебный',	// add comments
	3	=> 'пользователь',	// add tasks, add comments, task status
	4	=> 'модератор', // add/edit all tasks, comments, project members and status
	5	=> 'менеджер'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'гость',     // access own projects, view only public tasks
	2	=> 'внутр',    // access own projects, create projects, create tasks
	3	=> 'менеджер',   // access own projects, create projects, tasks
	4	=> 'администратор' // everything
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
	1 => 'Работа',
	2 => 'Встреча',
	3 => 'Документ',
	4 => 'Интернет',	
	5 => 'Звонок',
	6 => 'Email',
	7 => 'Дом',
	8 => 'Другое'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Срочно!',
	2 => 'Высокий приоритет',
	3 => 'Средний приоритет',
	4 => 'Нормальный приоритет',	
	5 => 'Низкий приоритет',
	6 => 'Низкий приоритет',
	7 => 'Очень низкий приоритет',
	8 => 'Очень низкий приоритет',
	9 => 'Любой'
);
?>
