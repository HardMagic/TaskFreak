<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'pt'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Tarefa',
    'print_list'        => 'Vers&atilde;o para Impress&atilde;o',
	'new_todo'			=> 'Nova Tarefa',
	'view'				=> 'Visualizar',
	'all_projects'		=> 'Todos os Projetos',
	'future_tasks'		=> 'Tarefas futuras',
	'past_tasks'		=> 'Tarefas anteriores',
	'your_first_project'=> 'Seu primeiro Projeto',
    'my_tasks'          => 'Minhas tarefas',
	'all_tasks'			=> 'Todas as Tarefas',
	'all_contexts'		=> 'Todos os Contextos',
	'all_users' 		=> 'Todos os usu&aacute;rios',
	'reload'			=> 'Atualizar',
	'manage'			=> 'Gerenciar',
	'projects'			=> 'Projetos',
	'users' 			=> 'Usu&aacute;rios',
    'preferences'       => 'Minha conta',
    'settings'          => 'Configura&ccedil;&otilde;es do sistema',
	'login'				=> 'Login',
	'logout'			=> 'Logout',
	'warning'			=> 'Aten&ccedil;&atilde;o',
	'warning_install'	=> 'A pasta de instala&ccedil;&atilde;o (install) ainda existe. Voc&ecirc; deve remov&ecirc;-la por raz&otilde;es de seguran&ccedil;a.'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioridade',
	'context'			=> 'Contexto',
	'deadline'			=> 'Fim do Prazo',
	'project'			=> 'Projeto',
	'tasks'				=> 'Tarefas',
	'title'				=> 'T&iacute;tulo',
	'description'		=> 'Descri&ccedil;&atilde;o',
    'user'              => 'Usu&aacute;rio',
    'visibility'        => 'Visibilidade',
    'private'           => 'privado',
    'internal'          => 'interno',
    'public'            => 'p&uacute;blico',
	'status'			=> 'Status',
	'create'			=> 'Criar',
	'save'				=> 'Salvar',
	'cancel'			=> 'Cancelar',
	'reset'				=> 'Apagar formul&aacute;rio',
    'close'             => 'fechar',
    'edit'              => 'editar',
    'delete'            => 'deletar',
	'new'				=> 'Novo',
	'project_new'		=> 'novo projeto?',
	'project_list'		=> 'mostrar lista',
	'compulsory_legend' => 'Campos em <span class="compulsory">vermelho</span> s&atilde;o obrigat&oacute;rios.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'descri&ccedil;&atilde;o',
	'description_none'	=> 'sem descri&ccedil;&atilde;o',
	'tab_comments'		=> 'coment&aacute;rios',
	'comments_by'		=> 'por',
	'comments_none'		=> 'nenhum coment&aacute;rio',
	'comments_no_access'	=> 'os coment&aacute;rios s&atilde;o confidenciais',
	'comments_new'		=> 'enviar o primeiro coment&aacute;rio',
	'comments_reply'	=> 'responder',
	'comments_edit'		=> 'editar',
	'comments_delete'	=> 'deletar',
	'comments_delete_confirm'	=> 'realmente deletar o coment&aacute;rio?',
	'tab_history'		=> 'hist&oacute;rico',
    'history_date'      => 'data',
    'history_user'      => 'usu&aacute;rio',
    'history_what'      => 'a&ccedil;&atilde;o'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dia',
	'days'				=> 'dias',
	'help'				=> 'ex. hoje, amanha, 12 de abril'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projeto',
    'projects'          => 'Projetos',
    'name'              => 'Nome',
    'description'       => 'Descri&ccedil;&atilde;o',
    'position'          => 'Posi&ccedil;&atilde;o',
    'members'           => 'Membros',
    'members_legend'    => 'Membros do Projeto',
	'status'            => 'Status',
    'action'            => 'A&ccedil;&atilde;o',
    'project_history'   => 'Ver hist&oacute;rico de a&ccedil;&otilde;es',
    'remove_confirm'    => 'realmente deseja remover do projeto?',
    'user_add_legend'   => 'Adicionar um usu&aacute;rio a este projeto',
    'user_add_button'   => 'Adicionar usu&aacute;rio no projeto',
	'user_no_project'   => 'N&atilde;o faz parte de um projeto.',
	'user_added_ok'		=> 'Membro adicionado ao projeto com sucesso',
	'user_added_err'	=> 'O membro j&aacute; pertence a um projeto ou n&atilde;o est&aacute; dispon&iacute;vel',
	'user_removed_ok'	=> 'Membro removido do projeto!',
	'user_removed_err'	=> 'O membro n&atilde;o pode ser removido, ou j&aacute; foi removido',
	'user_position_ok'	=> 'Posi&ccedil&atilde;o do membro atualizada com sucesso',
	'project_info'		=> 'Informa&ccedil;&otilde;es do Projeto',
	'history_date'      => 'data',
    'history_user'      => 'usu&aacute;rio',
	'history_what'      => 'a&ccedil;&atilde;o',
	'action_save_ok'	=> 'Detalhes do projeto atualizados!',
	'action_added_ok'	=> 'Projeto criado!',
	'action_status_ok'	=> 'Status do projeto atualizado!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Informa&ccedil;&atilde;o Pessoal',
    'user'              => 'Usu&aacute;rio',
    'name'              => 'Nome',
    'title'             => 'T&iacute;tulo',
    'first_name'        => 'Primeiro Nome',
    'middle_name'       => 'Nome do Meio',
    'last_name'         => 'Sobrenome',
    'address'           => 'Endere&ccedil;o',
    'location'          => 'Local',
    'city'              => 'Cidade',
    'state'             => 'Estado',
    'country'           => 'Pa&iacute;s',
    'email'             => 'E-mail',
    'position'          => 'N&iacute;vel',
	'last_login'        => '&Uacute;ltimo acesso',
	'last_login_from'	=> 'De',
	'logout_goodbye'	=> 'Voc&ecirc; foi deslogado. At&eacute; logo.',
	'logout_login'		=> 'Clique para fazer o login',
    'action'            => 'A&ccedil;&atilde;o',
    'delete_confirm'    => 'deseja realmente deletar este usu&aacute;rio?',
    'enable_confirm'    => 'deseja realmente habilitar este usu&aacute;rio?',
    'disable_confirm'   => 'deseja realmente desabilitar este usu&aacute;rio?',
    'account'           => 'Credenciais da Conta',
    'account_legend'    => 'Por favor escolha um nome de usu&aacute;rio e senha para ter acesso ao TaskFreak!',
    'username'          => 'Usu&aacute;rio',
    'password'          => 'Senha',
    'password_confirm'  => '(confirma&ccedil;&atilde;o)',
    'auto_login'        => 'Lembrar de mim neste computador',
    'password_legend'   => 'Informe a senha (e a confirma&ccedil;&atilde;o) somente se voc&ecirc; deseja alter&aacute;-la.',
	'enabled_label'     => 'A conta est&aacute; habilitada',
	'login_signup'		=> 'N&atilde;o &eacute; um membro? Crie uma conta aqui',
	'account_created'	=> 'Criado em',
	'account_disabled'	=> 'A conta est&aacute; desabilitada!',
	'state_us_only'		=> 'Somente para residentes nos EUA'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Criar',
	'add_account'		=> 'Cadastrar',
    'update'            => 'Salvar altera&ccedil;&otilde;es',
    'cancel'            => 'Cancelar altera&ccedil;&otilde;es',
    'reset'             => 'Limpar formul&aacute;rio',
    'back'              => 'Voltar para a lista'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data n&atilde;o encontrada ou acesso negado',
    'denied'                    => 'Acesso negado!',
    'project_delete'            => 'Remover Projeto',
    'project_delete_confirm'    => 'Deseja realmente remover este projeto e suas tarefas?',
    'project_delete_ok'         => 'Projeto Removido',
    'project_delete_no'         => 'O Projeto n&atilde;o pode ser removido!',
    'task_edit'				    => "Editar esta tarefa",
    'task_delete'			    => "Remover esta tarefa",
    'task_delete_confirm'	    => "Deseja realmente remover esta tarefa?",
	'error_no_title'		    => "Por favor informe o t&iacute;tulo!",
	'done_deleted'			    => "tarefa removida!",
	'done_status'			    => "status da tarefa atualizado",
	'done_updated'			    => 'tarefa atualizada!',
	'done_added'			    => 'tarefa criada!',
	'done_comment_added'		=> 'coment&aacute;rio adicionado!',
	'done_comment_updated'		=> 'coment&aacute;rio atualizado!',
	'done_comment_deleted'		=> 'coment&aacute;rio removido!',
	'operation_failed'			=> 'a opera&ccedil;&atilde;o falhou!',
	'purge_all'				    => 'remover (tarefas antigas) para todos os projetos',
	'purge_all_confirm'		    => 'deseja realmente remover as tarefas antigas de todos os projetos?',
	'delete_all'			    => 'remover todos os projetos (tarefas)',
	'delete_all_confirm'	    => 'deseja realmente remover todas as tarefas de todos os projetos?',
	'purge_one'				    => 'remover (tarefas antigas)',
	'purge_one_confirm'		    => 'realmente deseja remover as tarefas antigas deste projeto?',
	'delete_one'			    => 'remover todo o projeto',
	'delete_one_confirm'	    => 'deseja realmente remover o projeto?',
	'no_task_found'			    => 'nenhuma tarefa tem estes crit&eacute;rios',
	'no_project_found'		    => 'projeto n&atilde;o foi encontrado',
	'create_task'			    => 'Clique aqui para criar uma',
	'no_project_found_1'	    => "Projeto n&atilde;o encontrado!",
	'no_project_found_2'	    => 'Você precisa criar uma tarefa primeiro.',
	'close_window'			    => 'fechar esta janela',
    'session_expired'           => 'Sess&atil;deo expirou',
	'information_saved'			=> 'Informa&ccedil;&otilde;es salvas com sucesso',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Nenhuma tarefa hoje',
    'error_login'   => 'Erro na autentica&ccedil;&atilde;o'
);
