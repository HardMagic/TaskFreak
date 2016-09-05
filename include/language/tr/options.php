<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.4                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Yeni',           // 0 is for new project
	10	=> 'Teklif',      // anything between 0 and 40
	20 	=> 'Çalışılıyor',   // is free to be customized
	40	=> 'Tamamlanmış',     // anything 40 and over
	50	=> 'İptal Edilmiş'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'ziyaretçi',	// see only, no action
	2	=> 'resmi',	// add comments
	3	=> 'üye',	// add tasks, add comments, task status
	4	=> 'operator', // add/edit all tasks, comments, project members and status
	5	=> 'admin'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'misafir',     // access own projects, view only public tasks
	2	=> 'dahili',    // access own projects, create projects, create tasks
	3	=> 'yönetici',   // access own projects, create projects, tasks
	4	=> 'admin' // everything
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
	1 => 'İş',
	2 => 'Toplantı',
	3 => 'Döküman',
	4 => 'Internet',	
	5 => 'Telefon',
	6 => 'Email',
	7 => 'Ev',
	8 => 'Diğer'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Kritik!',
	2 => 'Yüksek öncelik',
	3 => 'Orta öncelik',
	4 => 'Normal öncelik',	
	5 => 'Düşük öncelik',
	6 => 'Düşük Öncelik',
	7 => 'Çok düşük öncelik',
	8 => 'Çok düşük öncelik',
	9 => 'Önemsiz'
);
?>
