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

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'cn'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> '任务',
    'print_list'        => '打印版本',
	'new_todo'			=> '新任务',
	'view'				=> '查看',
	'all_projects'		=> '所有项目',
	'future_tasks'		=> '未完成任务',
	'past_tasks'		=> '已完成任务',
    'my_tasks'          => '我的任务',
	'all_tasks'			=> '所有任务',
	'all_contexts'		=> '所有内容',
	'all_users' 		=> '所有用户',
	'reload'			=> '重新载入',
	'manage'			=> '管理',
	'projects'			=> '项目',
	'users' 			=> '用户',
    'preferences'       => '个人信息',
    'settings'          => '系统设置',
	'login'				=> '登录',
	'logout'			=> '注销',
	'warning'			=> '警告',
	'warning_install'	=> '安装目录(install)未删除,出于安全考虑,请删除该目录'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> '优先级',
	'context'			=> '内容',
	'deadline'			=> '期限',
	'project'			=> '项目',
	'tasks'				=> '任务',
	'title'				=> '标题',
	'description'		=> '描述',
    'user'              => '用户',
    'visibility'        => '可见',
    'private'           => '私有',
    'internal'          => '内部',
    'public'            => '公共',
	'status'			=> '状态',
	'create'			=> '创建于',
	'save'				=> '保存',
	'cancel'			=> '取消',
	'reset'				=> '重置',
    'close'             => '关闭',
    'edit'              => '编辑',
    'delete'            => '删除',
	'new'				=> '新建',
	'project_new'		=> '新建项目?',
	'project_list'		=> '显示列表',
    'compulsory_legend' => '标记为<span class="compulsory">红色</span>的项目是必填的.',
	'list_comments'		=> '评论'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> '描述',
	'description_none'	=> '无描述',
	'tab_comments'		=> '评论',
	'comments_by'		=> '由',
	'comments_none'		=> '暂无评论',
	'comments_no_access'	=> '非公开评论',
	'comments_new'		=> '发表第一篇评论',
	'comments_reply'	=> '回复',
	'comments_edit'		=> '编辑',
	'comments_delete'	=> '删除',
	'comments_delete_confirm'	=> '确认删除此评论?',
	'tab_history'		=> '历史',
    'history_date'      => '日期',
    'history_user'      => '用户',
    'history_what'      => '行为'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'day',
	'days'				=> '天',
	'help'				=> '例:今天,明天,4月12日'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => '项目',
    'projects'          => '项目',
    'name'              => '名字',
    'description'       => '描述',
    'position'          => '职位',
    'members'           => '成员',
    'members_legend'    => '项目成员',
	'status'            => '状态',
    'action'            => '动作',
    'project_history'   => '查看状态迁移历史',
    'remove_confirm'    => '确认从项目中删除?',
    'user_add_legend'   => '为项目添加新成员',
    'user_add_button'   => '为项目添加新成员',
    'user_no_project'   => '不属于任何项目',
	'user_added_ok'		=> '成员成功添加到该项目',
	'user_added_err'	=> '成员已经输入该项目或无效',
	'user_removed_ok'	=> '成员已经从该项目删除',
	'user_removed_err'	=> '成员未能删除或已经删除',
	'user_position_ok'	=> '成员职位已经更新',
	'project_info'		=> '项目信息',
	'history_date'      => '日期',
    'history_user'      => '用户',
	'history_what'      => '行为',
	'action_save_ok'	=> '项目信息已更新!',
	'action_added_ok'	=> '项目已创建!',
	'action_status_ok'	=> '项目状态已更新!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => '个人信息',
    'user'              => '用户',
    'name'              => '名字',
    'title'             => '头衔',
    'first_name'        => '名',
    'middle_name'       => '名(英文)',
    'last_name'         => '姓',
    'address'           => '地址',
    'location'          => '位置',
    'city'              => '城市',
    'state'             => '省',
    'country'           => '国家',
    'email'             => 'Email',
    'position'          => '等级',
    'last_login'        => '上次登录',
	'last_login_from'	=> '来至',
	'logout_goodbye'	=> '您已经注销,再见',
	'logout_login'		=> '单击登录',
    'action'            => '动作',
    'delete_confirm'    => '确认删除该用户?',
    'enable_confirm'    => '确认激活该用户?',
    'disable_confirm'   => '取人冻结该用户?',
    'account'           => '用户凭证',
    'account_legend'    => '请登录以获得访问权限!',
    'username'          => '用户名',
    'password'          => '密码',
    'password_confirm'  => '确认',
    'auto_login'        => '在此机器上记住我的登录信息',
    'password_legend'   => '输入新的密码(只在需要改变时输入).',
	'enabled_label'     => '帐号已激活',
	'login_signup'		=> '还未注册?点击此处注册新用户',
	'account_created'	=> '创建于',
	'account_disabled'	=> '帐户停用!',
	'state_us_only'		=> '仅供美国用户'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => '创建',
	'add_account'		=> '提交',
    'update'            => '保存更改',
    'cancel'            => '取消更改',
    'reset'             => '重置',
    'back'              => '回退到列表 '
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => '日期不存在或访问受限',
    'denied'                    => '访问受限!',
    'project_delete'            => '删除项目',
    'project_delete_confirm'    => '确认删除该项目以及其子任务?',
    'project_delete_ok'         => '项目已删除',
    'project_delete_no'         => '项目无法删除!',
    'task_edit'				    => '编辑该任务',
    'task_delete'			    => '删除该任务',
    'task_delete_confirm'	    => '确认删除该项目?',
	'error_no_title'		    => '请输入标题!',
	'done_deleted'			    => '任务已删除!',
	'done_status'			    => '任务状态已更新',
	'done_updated'			    => '任务已更新!',
	'done_added'			    => '任务已创建!',
	'done_comment_added'		=> '评论已添加!',
	'done_comment_updated'		=> '评论已更新!',
	'done_comment_deleted'		=> '评论已删除!',
	'operation_failed'			=> '操作失败!',
	'purge_all'				    => '清空所有项目的过期任务',
	'purge_all_confirm'		    => '确认从所有项目中清空过期任务?',
	'delete_all'			    => '删除所有项目(以及所有任务)',
	'delete_all_confirm'	    => '确认删除所有项目(以及所有任务)?',
	'purge_one'				    => '清空过期任务',
	'purge_one_confirm'		    => '确认清空此项目的过期任务?',
	'delete_one'			    => '删除整个项目',
	'delete_one_confirm'	    => '确认删除整个项目?',
	'no_task_found'			    => '无匹配任务',
	'no_project_found'		    => '无匹配项目',
	'create_task'			    => '单击创建新任务',
	'no_project_found_1'	    => "哦!没找到任何项目!!!",
	'no_project_found_2'	    => '请先创建一个任务',
	'close_window'			    => '关闭此窗口',
    'session_expired'           => '会话已过期',
	'information_saved'			=> '信息成功保存',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => '今日无任务',
    'error_login'   => '登录失败'
);
