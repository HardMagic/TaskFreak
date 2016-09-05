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
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Task',
    'print_list'        => 'Printing version',
	'new_todo'			=> 'New Todo',
	'view'				=> 'View',
	'all_projects'		=> 'All Projects',
	'future_tasks'		=> 'Future Tasks',
	'past_tasks'		=> 'Past Tasks',
    'my_tasks'          => 'My Tasks',
	'all_tasks'			=> 'All Tasks',
	'all_contexts'		=> 'All Contexts',
	'all_users' 		=> 'All Users',
	'reload'			=> 'Reload',
	'manage'			=> 'Manage',
	'projects'			=> 'Projects',
	'users' 			=> 'Users',
    'preferences'       => 'My Profile',
    'settings'          => 'System Settings',
	'login'				=> 'Login',
	'logout'			=> 'Logout',
	'warning'			=> 'Warning',
	'warning_install'	=> 'Install folder still exists, you should delete it for security purposes'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priority',
	'context'			=> 'Context',
	'deadline'			=> 'Deadline',
	'project'			=> 'Project',
	'tasks'				=> 'Tasks',
	'title'				=> 'Title',
	'description'		=> 'Description',
    'user'              => 'User',
    'visibility'        => 'Visibility',
    'private'           => 'private',
    'internal'          => 'internal',
    'public'            => 'public',
	'status'			=> 'Status',
	'create'			=> 'Create',
	'save'				=> 'Save',
	'cancel'			=> 'Cancel',
	'reset'				=> 'Reset form',
    'close'             => 'close',
    'edit'              => 'edit',
    'delete'            => 'delete',
	'new'				=> 'New',
	'project_new'		=> 'new project?',
	'project_list'		=> 'show list',
	'compulsory_legend' => 'Fields in <span class="compulsory">red</span> are compulsory.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'description',
	'description_none'	=> 'no description',
	'tab_comments'		=> 'comments',
	'comments_by'		=> 'by',
	'comments_none'		=> 'no comment left yet',
	'comments_no_access'	=> 'comments are confidential',
	'comments_new'		=> 'post first comment',
	'comments_reply'	=> 'new comment',
	'comments_edit'		=> 'edit',
	'comments_delete'	=> 'delete',
	'comments_delete_confirm'	=> 'really delete comment?',
	'tab_history'		=> 'history',
    'history_date'      => 'date',
    'history_user'      => 'user',
    'history_what'      => 'action'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'day',
	'days'				=> 'days',
	'help'				=> 'eg. today, tomorrow, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Project',
    'projects'          => 'Projects',
    'name'              => 'Name',
    'description'       => 'Description',
    'position'          => 'Position',
    'members'           => 'Members',
    'members_legend'    => 'Project members',
	'status'            => 'Status',
    'action'            => 'Action',
    'project_history'   => 'View status change history',
    'remove_confirm'    => 'really remove from the project?',
    'user_add_legend'   => 'Add a user to this project',
    'user_add_button'   => 'Add user to project',
	'user_no_project'   => 'Belongs to no project',
	'user_added_ok'		=> 'Member successfully added to project',
	'user_added_err'	=> 'Member already belongs to project or is not available',
	'user_removed_ok'	=> 'Member removed from project!',
	'user_removed_err'	=> 'Member can not be removed or has already been removed',
	'user_position_ok'	=> 'Member position(s) successfully updated',
	'project_info'		=> 'Project info',
	'history_date'      => 'date',
    'history_user'      => 'user',
	'history_what'      => 'action',
	'action_save_ok'	=> 'Project details updated!',
	'action_added_ok'	=> 'Project created!',
	'action_status_ok'	=> 'Project status updated!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Personal information',
    'user'              => 'User',
    'name'              => 'Name',
    'title'             => 'Title',
    'first_name'        => 'First name',
    'middle_name'       => 'Middle name',
    'last_name'         => 'Last name',
    'address'           => 'Address',
    'location'          => 'Location',
    'city'              => 'City',
    'state'             => 'State',
    'country'           => 'Country',
    'email'             => 'Email',
    'position'          => 'Level',
	'last_login'        => 'Last login',
	'last_login_from'	=> 'From',
	'logout_goodbye'	=> 'You are now logged out. Goodbye.',
	'logout_login'		=> 'Click here to login',
    'action'            => 'Action',
    'delete_confirm'    => 'really delete this user?',
    'enable_confirm'    => 'really enable this user?',
    'disable_confirm'   => 'really disable this user?',
    'account'           => 'Account credentials',
    'account_legend'    => 'Please choose a username and password to gain access to TaskFreak!',
    'username'          => 'Username',
    'password'          => 'Password',
    'password_confirm'  => '(confirm)',
    'auto_login'        => 'remember me on this computer',
    'password_legend'   => 'Enter a password (and confirm) only if you want to change it.',
	'enabled_label'     => 'Account is enabled',
	'login_signup'		=> 'Not a member? Request an account here',
	'account_created'	=> 'Created on',
	'account_disabled'	=> 'Account is disabled!',
	'state_us_only'		=> 'for US members only'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Create',
	'add_account'		=> 'Submit',
    'update'            => 'Save changes',
    'cancel'            => 'Cancel changes',
    'reset'             => 'Reset form',
    'back'              => 'Back to list'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data not found or access denied',
    'denied'                    => 'Access denied!',
    'project_delete'            => 'Delete project',
    'project_delete_confirm'    => 'Really delete this project and its tasks?',
    'project_delete_ok'         => 'Project deleted',
    'project_delete_no'         => 'Project can not be deleted!',
    'task_edit'				    => 'Edit this task',
    'task_delete'			    => 'Delete this task',
    'task_delete_confirm'	    => 'Really delete this task?',
	'error_no_title'		    => 'please enter title!',
	'done_deleted'			    => 'task deleted!',
	'done_status'			    => 'task status updated',
	'done_updated'			    => 'task updated!',
	'done_added'			    => 'task created!',
	'done_comment_added'		=> 'comment added!',
	'done_comment_updated'		=> 'comment updated!',
	'done_comment_deleted'		=> 'comment deleted!',
	'operation_failed'			=> 'operation failed!',
	'purge_all'				    => 'purge (delete old tasks) for all projects',
	'purge_all_confirm'		    => 'really delete old tasks from all projects?',
	'delete_all'			    => 'delete all projects (all tasks)',
	'delete_all_confirm'	    => 'really delete all tasks from all projects?',
	'purge_one'				    => 'purge (delete old tasks)',
	'purge_one_confirm'		    => 'really delete old tasks from this project?',
	'delete_one'			    => 'delete the entire project',
	'delete_one_confirm'	    => 'really delete this project?',
	'no_task_found'			    => 'no task match your criterions',
	'no_project_found'		    => 'no project found',
	'create_task'			    => 'Click here to make an attempt to create one',
	'no_project_found_1'	    => "Dang! Can't find a project!!!",
	'no_project_found_2'	    => 'You probably need to create a task first, you know',
	'close_window'			    => 'close this window',
    'session_expired'           => 'Session has expired',
    'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'information_saved'			=> 'Information successfully saved',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'No task for today',
    'error_login'   => 'Authentication failed'
);
