<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Vicente Jiménez Aguilar <googuy+taskfreak@gmail.com>              *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'es'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Tarea',
    'print_list'        => 'Versi&oacute;n para Imprimir',
	'new_todo'			=> 'Nueva Tarea',
	'view'				=> 'Ver',
	'all_projects'		=> 'Todos los Proyectos',
	'future_tasks'		=> 'Tareas pendientes',
	'past_tasks'		=> 'Tareas pasadas',
    'my_tasks'          => 'Mis tareas',
	'all_tasks'			=> 'Todas las Tareas',
	'all_contexts'		=> 'Todos los Contextos',
	'all_users' 		=> 'Todos los usuarios',
	'reload'			=> 'Actualizar',
	'manage'			=> 'Gestionar',
	'projects'			=> 'Proyectos',
	'users' 			=> 'Usuarios',
    'preferences'       => 'Mi Perfil',
    'settings'          => 'Configuraci&oacute;n del sistema',
	'login'				=> 'Acceder',
	'logout'			=> 'Salir',
	'warning'			=> 'Atenci&oacute;n',
	'warning_install'	=> 'El directorio Install a&uacute;n existe, deber&iacute;a borrarlo por razones de seguridad'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioridad',
	'context'			=> 'Contexto',
	'deadline'			=> 'Fecha tope',
	'project'			=> 'Proyecto',
	'tasks'				=> 'Tareas',
	'title'				=> 'T&iacute;tulo',
	'description'		=> 'Descripci&oacute;n',
    'user'              => 'Usuario',
    'visibility'        => 'Visibilidad',
    'private'           => 'privado',
    'internal'          => 'interno',
    'public'            => 'p&uacute;blico',
	'status'			=> 'Estado',
	'create'			=> 'Crear',
	'save'				=> 'Guardar',
	'cancel'			=> 'Cancelar',
	'reset'				=> 'Borrar formulario',
    'close'             => 'cerrar',
    'edit'              => 'editar',
    'delete'            => 'eliminar',
	'new'				=> 'Nuevo',
	'project_new'		=> '&iquest;Nuevo proyecto?',
	'project_list'		=> 'Mostrar lista',
	'compulsory_legend' => 'Los campos en <span class="compulsory">rojo</span> son obligatorios.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'descripci&oacute;n',
	'description_none'	=> 'sin descripci&oacute;n',
	'tab_comments'		=> 'comentarios',
	'comments_by'		=> 'por',
	'comments_none'		=> 'ning&uacute;n comentario a&uacute;n',
	'comments_no_access'	=> 'los comentarios son confidenciales',
	'comments_new'		=> 'introducir primer comentario',
	'comments_reply'	=> 'responder',
	'comments_edit'		=> 'editar',
	'comments_delete'	=> 'eliminar',
	'comments_delete_confirm'	=> '&iquest;Realmente desea eliminar comentario?',
	'tab_history'		=> 'hist&oacute;rico',
    'history_date'      => 'fecha',
    'history_user'      => 'usuario',
    'history_what'      => 'acci&oacute;n'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'd&iacute;a',
	'days'				=> 'd&iacute;as',
	'help'				=> 'ej: hoy, ma&ntilde;ana, 12 abr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Proyecto',
    'projects'          => 'Proyectos',
    'name'              => 'Nombre',
    'description'       => 'Descripci&oacute;n',
    'position'          => 'Posici&oacute;n',
    'members'           => 'Miembros',
    'members_legend'    => 'Miembros del Proyecto',
	'status'            => 'Estado',
    'action'            => 'Acci&oacute;n',
    'project_history'   => 'Ver el hist&oacute;rico de cambios de estado',
    'remove_confirm'    => '&iquest;Desea eliminarlo del proyecto?',
    'user_add_legend'   => 'A&ntilde;adir un usuario a este proyecto',
    'user_add_button'   => 'A&ntilde;adir usuario al proyecto',
	'user_no_project'   => 'No participa en ning&uacute;n proyecto',
	'user_added_ok'		=> 'Miembro a&ntilde;adido correctamente al proyecto',
	'user_added_err'	=> 'El usuario ya es miembro del proyecto o no est&aacute; disponible',
	'user_removed_ok'	=> '&¡excl;Miembro quitado del proyecto!',
	'user_removed_err'	=> 'El usuario no puede ser quitado o ya se hab&iacute;a quitado',
	'user_position_ok'	=> 'Rango(s) del miembro correctamente actualizado',
	'project_info'		=> 'Informaci&oacute;n del proyecto',
	'history_date'      => 'fecha',
    'history_user'      => 'usuario',
	'history_what'      => 'acci&oacute;n',
	'action_save_ok'	=> '&iexcl;Detalles del proyecto actualizados!',
	'action_added_ok'	=> '&iexcl;Proyecto creado!',
	'action_status_ok'	=> '&iexcl;Estado del proyecto actualizado!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Informa&oacute;n personal ',
    'user'              => 'Usuario',
    'name'              => 'Nombre',
    'title'             => 'T&iacute;tulo',
    'first_name'        => 'Nombre',
    'middle_name'       => 'Sobrenombre',
    'last_name'         => 'Apellidos',
    'address'           => 'Direcci&oacute;n',
    'location'          => 'Localidad',
    'city'              => 'Ciudad',
    'state'             => 'Estado',
    'country'           => 'Pa&iacute;s',
    'email'             => 'Correo Electr&oacute;nico',
    'position'          => 'Nivel',
	'last_login'        => '&Uacute;ltimo acceso',
	'last_login_from'	=> 'Desde',
	'logout_goodbye'	=> 'Se ha desconectado. Hasta luego.',
	'logout_login'		=> 'Pulse aquí para acceder',
    'action'            => 'Acci&oacute;n',
    'delete_confirm'    => '&iquest;Desea realmente eliminar a este usuario?',
    'enable_confirm'    => '&iquest;Desea realmente activar a este usuario?',
    'disable_confirm'   => '&iquest;Desea realmente deshabilitar a este usuario?',
    'account'           => 'Credenciales de la cuenta',
    'account_legend'    => '&iexcl;Por favor, introduzca un nombre de usuario y una contrase&ntilde;a para acceder a TaskFreak!',
    'username'          => 'Usuario',
    'password'          => 'Contrase&ntilde;a',
    'password_confirm'  => '(confirmaci&oacute;n)',
    'auto_login'        => 'recuerdeme en este ordenador',
    'password_legend'   => 'Introduzca una contrase&ntilde;a (y confirmela) s&oacute;lo si quieres cambiarla.',
	'enabled_label'     => 'Cuenta activada',
	'login_signup'		=> '&iquest;No es miembro? Pida una cuenta aqu&iacute;',
	'account_created'	=> 'Creado en',
	'account_disabled'	=> '&iexcl;Cuenta deshabilitada!',
	'state_us_only'		=> 's&oacute;lo para habitantes de EEUU'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Crear',
	'add_account'		=> 'Enviar',
    'update'            => 'Salvar cambios',
    'cancel'            => 'Cancelar cambios',
    'reset'             => 'Limpiar formulario',
    'back'              => 'Volver a la lista'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Datos no encontrado o acceso denegado',
    'denied'                    => '&iexcl;Acceso denegado!',
    'project_delete'            => 'Eliminar proyecto',
    'project_delete_confirm'    => '&iquest;Desea realmente eliminar este proyecto y sus tareas?',
    'project_delete_ok'         => 'Proyecto eliminado',
    'project_delete_no'         => '&iexcl;El proyecto no puede eliminarse!',
    'task_edit'				    => "Editar tarea",
    'task_delete'			    => "Eliminar tarea",
    'task_delete_confirm'	    => "&iquest;Desea realmente borrar la tarea?",
	'error_no_title'		    => "&iexcl;Por favor, introduzca un t&iacute;tulo!",
	'done_deleted'			    => "&iexcl;Tarea eliminada!",
	'done_status'			    => "actualizado estado de tarea",
	'done_updated'			    => '&iexcl;Tarea actualizada!',
	'done_added'			    => '&iexcl;Tarea creada!',
	'done_comment_added'		=> '&iexcl;Comentario a&ntilde;adido!',
	'done_comment_updated'		=> '&iexcl;Comentario actualizado!',
	'done_comment_deleted'		=> '&iexcl;Comentario eliminado!',
	'operation_failed'			=> '&iexcl;La operaci&oacute;n ha fallado!!',
	'purge_all'				    => 'eliminar tareas antiguas de todos los proyectos',
	'purge_all_confirm'		    => '&iquest;Desea realmente eliminar todas las tareas antiguas de todos los proyectos?',
	'delete_all'			    => 'eliminar todos los proyectos (y todas las tareas)',
	'delete_all_confirm'	    => '&iquest;Desea realmente borrar todas las tareas de todos los proyectos?',
	'purge_one'				    => 'eliminar tareas antiguas',
	'purge_one_confirm'		    => '&iquest;Desea realmente borrar todas las tareas antiguas de &eacute;ste proyecto?',
	'delete_one'			    => 'eliminar proyecto entero',
	'delete_one_confirm'	    => '&iquest;Desea realmente eliminar este proyecto?',
	'no_task_found'			    => 'ninguna tarea coincide con sus criterios',
	'no_project_found'		    => 'ning&uacute;n proyecto encontrado',
	'create_task'			    => 'Pulse aqu&iacute; para intentar crear una',
	'no_project_found_1'	    => "&iexcl;Vaya, no puedo encontrar nig&uacute;n proyecto!",
	'no_project_found_2'	    => 'Sabe, quiz&aacute; necesite crear primero una tarea.',
	'close_window'			    => 'cerrar esta ventana',
    'session_expired'           => '&iexcl;La sesi&oacute;n ha caducado!',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'information_saved'			=> 'Informaci&oacute;n guardada correctamente',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'No hay tareas para hoy',
    'error_login'   => 'Fallo en la autenticaci&oacute;n'
);
