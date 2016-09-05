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
	0 	=> 'Novo',           // 0 is for new project
	10	=> 'Proposta',      // anything between 0 and 40
	20 	=> 'Em Progresso',   // is free to be customized
	40	=> 'Completo',     // anything 40 and over
	50	=> 'Cancelado'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'visitante',	// see only, no action
	2	=> 'oficial',	// add comments
	3	=> 'membro',	// add tasks, add comments, task status
	4	=> 'moderador', // add/edit all tasks, comments, project members and status
	5	=> 'l&iacute;der'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'visitante',     // access own projects, view only public tasks
	2	=> 'interno',    // access own projects, create projects, create tasks
	3	=> 'gerente',   // access own projects, create projects, tasks
	4	=> 'administrador' // everything
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
	1 => 'Trabalho',
	2 => 'Reuni&atilde;o',
	3 => 'Documento',
	4 => 'Internet',	
	5 => 'Telefone',
	6 => 'E-mail',
	7 => 'Casa',
	8 => 'Outros'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Urgente!',
	2 => 'Alta prioridade',
	3 => 'M&eacute;dia prioridade',
	4 => 'Prioridade normal',	
	5 => 'Baixa prioridade',
	6 => 'Baixa prioridade',
	7 => 'Prioridade muito baixa',
	8 => 'Prioridade muito baixa',
	9 => 'Indiferente'
);
?>
