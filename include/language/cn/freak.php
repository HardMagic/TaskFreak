<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Po Ming <poming168@gmail.com>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'cn'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> '工作',
    'print_list'        => '打印版本',
	'new_todo'			=> '新工作',
	'view'				=> '查看',
	'all_projects'		=> '所有項目',
	'future_tasks'		=> '未完成工作',
	'past_tasks'		=> '已完成工作',
    'my_tasks'          => '我的工作',
	'all_tasks'			=> '所有工作',
	'all_contexts'		=> '所有內容',
	'all_users' 		=> '所有用戶',
	'reload'			=> '重新載入',
	'manage'			=> '管理',
	'projects'			=> '項目',
	'users' 			=> '用戶',
    'preferences'       => '個人檔案',
    'settings'          => '系統設置',
	'login'				=> '登入',
	'logout'			=> '登出',
	'warning'			=> '警告',
	'warning_install'	=> '安裝目錄(install)未刪除,基於安全考慮,請刪除該目錄'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> '優先級',
	'context'			=> '內容',
	'deadline'			=> '期限',
	'project'			=> '項目',
	'tasks'				=> '工作',
	'title'				=> '標題',
	'description'		=> '描述',
    'user'              => '用戶',
    'visibility'        => '可見',
    'private'           => '私有',
    'internal'          => '內部',
    'public'            => '公共',
	'status'			=> '狀態',
	'create'			=> '創建於',
	'save'				=> '保存',
	'cancel'			=> '取消',
	'reset'				=> '重置',
    'close'             => '關閉',
    'edit'              => '編輯',
    'delete'            => '刪除',
	'new'				=> '新建',
	'project_new'		=> '新建項目?',
	'project_list'		=> '顯示列表',
    'compulsory_legend' => '標記為<span class="compulsory">紅色</span>的項目是必須填寫的.',
	'list_comments'		=> '註釋'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> '描述',
	'description_none'	=> '無描述',
	'tab_comments'		=> '註釋',
	'comments_by'		=> '由',
	'comments_none'		=> '暫無註釋',
	'comments_no_access'	=> '非公開註釋',
	'comments_new'		=> '發表第一篇註釋',
	'comments_reply'	=> '回復',
	'comments_edit'		=> '編輯',
	'comments_delete'	=> '刪除',
	'comments_delete_confirm'	=> '確認刪除此註釋?',
	'tab_history'		=> '歷史',
    'history_date'      => '日期',
    'history_user'      => '用戶',
    'history_what'      => '行為'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'day',
	'days'				=> '天',
	'help'				=> '例:今天,明天,4月12日'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => '項目',
    'projects'          => '項目',
    'name'              => '名字',
    'description'       => '描述',
    'position'          => '職位',
    'members'           => '成員',
    'members_legend'    => '項目成員',
	'status'            => '狀態',
    'action'            => '動作',
    'project_history'   => '查看狀態遷移歷史',
    'remove_confirm'    => '確認從項目中刪除?',
    'user_add_legend'   => '為項目添加新成員',
    'user_add_button'   => '為項目添加新成員',
    'user_no_project'   => '不屬於任何項目',
	'user_added_ok'		=> '成員成功添加到該項目',
	'user_added_err'	=> '成員已經輸入該項目或無效',
	'user_removed_ok'	=> '成員已經從該項目刪除',
	'user_removed_err'	=> '成員未能刪除或已經刪除',
	'user_position_ok'	=> '成員職位已經更新',
	'project_info'		=> '項目信息',
	'history_date'      => '日期',
    'history_user'      => '用戶',
	'history_what'      => '行為',
	'action_save_ok'	=> '項目信息已更新!',
	'action_added_ok'	=> '項目已創建!',
	'action_status_ok'	=> '項目狀態已更新!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => '個人信息',
    'user'              => '用戶',
    'name'              => '名字',
    'title'             => '頭銜',
    'first_name'        => '名',
    'middle_name'       => '名(英文)',
    'last_name'         => '姓',
    'address'           => '地址',
    'location'          => '位置',
    'city'              => '城市',
    'state'             => '省',
    'country'           => '國家',
    'email'             => 'Email',
    'position'          => '等級',
    'last_login'        => '上次登入',
	'last_login_from'	=> '來至',
	'logout_goodbye'	=> '您已經註銷,再見',
	'logout_login'		=> '按這裡登入',
    'action'            => '動作',
    'delete_confirm'    => '確認刪除該用戶?',
    'enable_confirm'    => '確認啟動該用戶?',
    'disable_confirm'   => '取人凍結該用戶?',
    'account'           => '用戶憑證',
    'account_legend'    => '請登入以獲得訪問權限!',
    'username'          => '用戶名',
    'password'          => '密碼',
    'password_confirm'  => '確認',
    'auto_login'        => '在此電腦上記住我的登入信息',
    'password_legend'   => '輸入新的密碼(只在需要改變時輸入).',
	'enabled_label'     => '帳號已啟動',
	'login_signup'		=> '還未註冊?點擊此處註冊新用戶',
	'account_created'	=> '創建於',
	'account_disabled'	=> '帳戶停用!',
	'state_us_only'		=> '僅供美國用戶'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => '創建',
	'add_account'		=> '提交',
    'update'            => '保存更改',
    'cancel'            => '取消更改',
    'reset'             => '重置',
    'back'              => '回退到列表 '
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => '日期不存在或訪問受限',
    'denied'                    => '訪問受限!',
    'project_delete'            => '刪除項目',
    'project_delete_confirm'    => '確認刪除該項目以及其子工作?',
    'project_delete_ok'         => '項目已刪除',
    'project_delete_no'         => '項目無法刪除!',
    'task_edit'				    => '編輯該工作',
    'task_delete'			    => '刪除該工作',
    'task_delete_confirm'	    => '確認刪除該項目?',
	'error_no_title'		    => '請輸入標題!',
	'done_deleted'			    => '工作已刪除!',
	'done_status'			    => '工作狀態已更新',
	'done_updated'			    => '工作已更新!',
	'done_added'			    => '工作已創建!',
	'done_comment_added'		=> '註釋已添加!',
	'done_comment_updated'		=> '註釋已更新!',
	'done_comment_deleted'		=> '註釋已刪除!',
	'operation_failed'			=> '操作失敗!',
	'purge_all'				    => '清空所有項目的過期工作',
	'purge_all_confirm'		    => '確認從所有項目中清空過期工作?',
	'delete_all'			    => '刪除所有項目(以及所有工作)',
	'delete_all_confirm'	    => '確認刪除所有項目(以及所有工作)?',
	'purge_one'				    => '清空過期工作',
	'purge_one_confirm'		    => '確認清空此項目的過期工作?',
	'delete_one'			    => '刪除整個項目',
	'delete_one_confirm'	    => '確認刪除整個項目?',
	'no_task_found'			    => '無相關工作',
	'no_project_found'		    => '無匹配項目',
	'create_task'			    => '單擊創建新工作',
	'no_project_found_1'	    => "哦!沒找到任何項目!!!",
	'no_project_found_2'	    => '請先創建一個工作',
	'close_window'			    => '關閉此視窗',
    'session_expired'           => 'Session已過期',
	'information_saved'			=> '信息成功保存',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> '確定關閉此工作?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => '今日無工作',
    'error_login'   => '登入失敗'
);
