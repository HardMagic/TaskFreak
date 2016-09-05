<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Catalan translation by Marti Minoves & AldeaGlobal (www.aldeaglobal.net)   *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'		=>	 'ca'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
'task'	=>		' Tasca ',				
'print_list' 	=>			 'Versió per imprimir',	
'new_todo'		=>		 'Nova Tasca',			
'view'		=>		 'Veure',			
'all_projects'		=>		' Tots els Projectes',			
'future_tasks'		=>		' tasques pendents',			
'past_tasks'		=>		' Tasques passades',			
'my_tasks'       		=>		' Les meves tasques',			
'all_tasks'		=>		' Totes les Tasques',			
'all_contexts'		=>		' Tots els Contextos',			
'all_users' 		=>		' Tots els usuaris',			
'reload'		=>		 'Actualització',			
'manage'		=>		 'Gestionar',			
'projects'		=>		' Projectes',			
'users' 		=>		' Usuaris',			
'preferences'    =>		' El meu perfil ',			
'settings'          => 	' Configuració del sistema ',				
'login'	=>	 'Accedir',				
'logout'	=>	 'Surt',				
'warning'	=>	 'Atenció',				
'warning_install'	=>	 'El directori Install encara existeix, hauria d´esborrar-per raons de seguretat'				

);

// fields and column labels
$GLOBALS['langForm'] = array (
'priority'	=>	 'Prioritat',	
'context'	=>	 'Context',	
'deadline'	=>	 'Data límit',	
'project'	=>	 'Projecte',	
'tasks'	=>	' Tasques',	
'title'	=>	 'Títol',	
'description'	=>	 'Descripció',	
'user'              	=>	 'Usuari',	
'visibility'        	=>	 'Visibilitat',	
'private'           	=>	 'privat',	
'internal'          	=>	 'intern',	
'public'            	=>	 'públic',	
'status'	=>	' Estat ',	
'create'	=>	 'Crear',	
'save'	=>	 'Desa',	
'cancel'	=>	 'Cancel·la',	
'reset'	=>	 'Borrar formulari',	
'close'             	=>	 'tancar',	
'edit'              	=>	 'edita',	
'delete'            	=>	 'eliminar',	
'new'	=>	 'Nou',	
'project_new'	=>	 '¿Nou projecte?',	
'project_list'	=>	 'Mostra llista',	
'compulsory_legend' 	=>	 'Els camps en <span class="compulsory"> vermell </ script> són obligatoris.',	
'list_comments'	=>	' Com. '	

);

$GLOBALS['langTaskDetails'] = array (
'tab_description'	=>	 'descripció',		
'description_none'	=>	 'sense descripció',		
'tab_comments'	=>	' comentaris',		
'comments_by'	=>	 'per',		
'comments_none'	=>	 'cap comentari encara',		
'comments_no_access'	=>	' els comentaris són confidencials',		
'comments_new'	=>	 'introduir primer comentari',		
'comments_reply'	=>	 'respondre',		
'comments_edit'	=>	 'edita',		
'comments_delete'	=>	 'eliminar',		
'comments_delete_confirm'	=>	 'Realment voleu suprimir el comentari?',		
'tab_history'	=>	 'històric',		
'history_date'      	=>	 'data',		
'history_user'      	=>	 'usuari',		
'history_what'      	=>	 'acció'		

);

// date support
$GLOBALS['langDateMore'] = array (
'day' 	=>	 'dia',
'days' 	=>	' dies',
'help' 	=>	 'ex: avui, demà, 12 abr'
);

// project related
$GLOBALS['langProject'] = array(
'project'           	=>	 'Projecte',			
'projects'          	=>	' Projectes',			
'name'              	=>	 'Nom',			
'description'       	=>	 'Descripció',			
'position'          	=>	 'Posició',			
'members'           	=>	' Membres',			
'members_legend'    	=>	 'Membres del Projecte',			
'status'            	=>	' Estat ',			
'action'            	=>	 'Acció',			
'project_history'   	=>	 'Veure l´historial de canvis d´estat',			
'remove_confirm'    	=>	 'Voleu eliminar del projecte?',			
'user_add_legend'   	=>	 'Afegeix un usuari a aquest projecte',			
'user_add_button'   	=>	 'Afegeix usuari al projecte',			
'user_no_project'   	=>	 'No participa en cap projecte',			
'user_added_ok'	=>	 'Membre afegit correctament al projecte',			
'user_added_err'	=>	 'L´usuari ja és membre del projecte o no està disponible',			
'user_removed_ok'	=>	 '& ¡excl; Membre tret del projecte!',			
'user_removed_err'	=>	 'L´usuari no pot ser eliminat o ja s´havia tret',			
'user_position_ok'	=>	 'Rang (s) del membre correctament actualitzat',			
'project_info'	=>	 'Informació del projecte',			
'history_date'      	=>	 'data',			
'history_user'      	=>	 'usuari',			
'history_what'      	=>	 'acció',			
'action_save_ok'	=>	 'Detalls del projecte actualitzats!',			
'action_added_ok'	=>	 'Projecte creat!',			
'action_status_ok'	=>	 'Estat del projecte actualitzat!'			

);

// project related
$GLOBALS['langUser'] = array(
'information'       	=>	 'Informació personal',			
'user'              	=>	 'Usuari',			
'name'              	=>	 'Nom',			
'title'             	=>	 'Títol',			
'first_name'        	=>	 'Nom',			
'middle_name'       	=>	 'sobrenom',			
'last_name'         	=>	 'Cognoms',			
'address'           	=>	' Adreça ',			
'location'          	=>	 'Localitat',			
'city'              	=>	 'Ciutat',			
'state'             	=>	 'Estat',			
'country'           	=>	 'País',			
'email'             	=>	 'Correu electrònic',			
'position'          	=>	 'Nivell',			
'last_login'        	=>	 'Últim accés',			
'last_login_from'	=>	 'Des',			
'logout_goodbye'	=>	 'S´ha desconnectat. Fins després. ',			
'logout_login'	=>	 'Premeu aquí per accedir',			
'action'            	=>	 'Acció',			
'delete_confirm'    	=>	 'Voleu realment eliminar aquest usuari?',			
'enable_confirm'    	=>	 'Voleu realment activar a aquest usuari?',			
'disable_confirm'   	=>	 'Voleu realment inhabilitar a aquest usuari?',			
'account'           	=>	 'Credencials del compte',			
'account_legend'    	=>	 'Introduïu un nom d´usuari i una contrasenya per accedir a TaskFreak!',			
'username'          	=>	 'Usuari',			
'password'          	=>	 'Contrasenya',			
'password_confirm'  	=>	 '(confirmació)',			
'auto_login'        	=>	 'Recordar-me en aquest ordinador',			
'password_legend'   	=>	 'Introduïu una contrasenya (i confirmeu) només si vols canviar-la.',			
'enabled_label'     	=>	 'Compte activat',			
'login_signup'	=>	 'No és membre? Demaneu un compte aquí ',			
'account_created'	=>	 'Creat',			
'account_disabled'	=>	 'Compte desactivada!',
'state_us_only'	=>	 'només per habitants d´EEUU'

);

// buttons
$GLOBALS['langButton'] = array(
'add' 	=>	 'Crear',
'add_account' 	=>	 'Enviar',
'update' 	=>	 'Desa els canvis',
'cancel' 	=>	 'Cancel · la els canvis',
'reset' 	=>	 'Netejar formulari',
'back' 	=>	 'Tornar a la llista'
);


// error and information messages
$GLOBALS['langMessage'] = array (
'not_found_or_denied'       	=>	 'Dades no trobat o accés denegat',		
'denied'                    	=>	 'Accés denegat!',		
'project_delete'            	=>	 'Suprimir projecte',		
'project_delete_confirm'    	=>	 'Voleu realment eliminar aquest projecte i les seves tasques?',		
'project_delete_ok'         	=>	 'Projecte eliminat',		
'project_delete_no'         	=>	 'El projecte no es pot eliminar!',		
'task_edit'	=>	 "Edita tasca",		
'task_delete'	=>	 "Suprimeix tasca",		
'task_delete_confirm'	=>	 "Voleu realment esborrar la tasca?",		
'error_no_title'	=>	 "Introduïu un títol!",		
'done_deleted'	=>	 "Tasca eliminada!",		
'done_status'	=>	 "actualitzat estat de tasca",		
'done_updated'	=>	 'Tasca actualitzada!',		
'done_added'	=>	 'Tasca creada!',		
'done_comment_added'	=>	 'Comentari afegit!',		
'done_comment_updated'	=>	 'Comentari actualitzat!',		
'done_comment_deleted'	=>	 'Comentari eliminat!',		
'operation_failed'	=>	 'L´operació ha fallat!!',		
'purge_all'	=>	 'eliminar tasques antigues de tots els projectes',		
'purge_all_confirm'	=>	 'Voleu realment eliminar totes les tasques antigues de tots els projectes?',		
'delete_all'	=>	 'eliminar tots els projectes (i totes les tasques)',		
'delete_all_confirm'	=>	 'Voleu realment esborrar totes les tasques de tots els projectes?',		
'purge_one'	=>	 'eliminar tasques antigues',		
'purge_one_confirm'	=>	 'Voleu realment esborrar totes les tasques antigues d´aquest projecte?',		
'delete_one'	=>	 'eliminar projecte sencer',		
'delete_one_confirm'	=>	 'Voleu realment eliminar aquest projecte?',		
'no_task_found'	=>	 'cap tasca coincideix amb els seus criteris',		
'no_project_found'	=>	 'cap projecte trobat',		
'create_task'	=>	 'Premi aquí per intentar crear una',		
'no_project_found_1'	=>	 "Vaja, no puc trobar cap projecte!",		
'no_project_found_2'	=>	 'Sap, potser caldria fer primer una tasca.',		
'close_window'	=>	 'tancar aquesta finestra',		
'session_expired'           	=>	 'La sessió ha caducat!',		
'clock_start'	=>	 'start timer',		
'clock_stop'	=>	 'stop timer',		
'clock_change'	=>	 'modify timer',		
'information_saved'	=>	 'Informació guardada correctament',		
'confirm_status_close'	=>	 'Really close this task?'		
);

$GLOBALS['langRss'] = array (
     'no_task' 	=>	 'No hi ha tasques per avui',
     'error_login' 	=>	 'Error en la comprovació'
);
