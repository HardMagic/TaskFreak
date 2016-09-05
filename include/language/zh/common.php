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

setLocale(LC_ALL,"zh_CN.utf8");

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> '表格中有错误，信息未保存。',
  "field_compulsory"	=>	"该项目是必须的"
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "密码不正确",
  "user_pass_limit1" => "密码字符个数必须在",
  "user_pass_limit2" => " 到",
  "user_pass_limit3" => " 之间",
  "user_pass_empty" => "密码不能为空",
  "user_pass_invalid" => "密码无效",
  "user_name_limit1" => "用户名字符个数必须在",
  "user_name_limit2" => " 到",
  "user_name_limit3" => " 之间",
  "user_name_exists" => "用户名已经存在",
  "user_name_empty" => "请输入用户名",
  "user_name_invalid" => "用户名中不能存在特殊字符或空格",
  "user_name_not_found" => "用户不存在",
  "user_disabled" => "此用户已被禁用",
  "user_forbidden" => "验证失败",
  "user_email_empty" => "请输入您的Email地址",
  "user_email_format" => "请输入有效的Email地址",
  "user_email_invalid" => "Email不存在",
  "user_password_invalid" => "密码错误",
  "email_empty" => "请输入您的Email地址",
  "email_exists" => "另一个用户已经使用了该Email地址",
  "email_invalid" => "请输入一个有效的Email地址",
  "document_wrong_type" => "文件类型错误",
  "document_empty" => "请选择一个文件",
  "common_name_empty" => "请输入名字",
  "common_title_empty" => "请输入标题",
  "common_theme_empty" => "请选择一个主题",
  "common_description_empty" => "请输入描述",
  "common_message_empty" => "请输入消息内容",
  "common_date_empty" => "请选择日期",
  "common_date_invalid" => "结束日期无效",
  "common_city_empty" => "请输入城市名称",
  "common_info_empty" => "请输入联系人信息",
  "common_url_empty" => "请输入web地址",
  "common_file_empty" => "请在点击'浏览'按钮后选择一个文件",
  "login_email" => "Email地址",
  "login_password" => "密码",
  "login_error0" => "需要登录",
  "login_error1" => "需要密码",
  "login_error2" => "访问禁止（受限页面）",
  "login_error3" => "无效的用户名或密码",
  "login_last_date" => '上次登录时间',
  "login_last_address"  => '上次登录地址',
  "post_user" => "用户名",
  "post_category" => "分类",
  "post_title" => "标题",
  "post_documents" => "相片",
  "post_date" => "发表于",
  "post_by" => "由",
  "doc_file_name" => "文件名",
  "doc_file_size" => "文件大小",
  "doc_file_type" => "文件类型",
  "doc_remove" => "删除",
  "doc_update" => "上传文件",
  "post_description" => "描述",
  "button_create" => "创建",
  "button_update" => "更新",
  "button_delete" => "删除",
  "button_login" => "登录",
  "profile_update_success" => "成功更新用户信息",
  "url" => "网址&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> '今天',
	'tomorrow'			=> '明天',
	'days'				=> '天',
	'day'				=> '天',
	'weeks'				=> '周',
	'week'				=> '周',
	'months'			=> '月',
	'month'				=> '月',
	'years'				=> '年',
	'year'				=> '年',
	'january'			=> '一月',
	'february'			=> '二月',
	'march'				=> '三月',
	'april'				=> '四月',
	'may'				=> '五月',
	'june'				=> '六月',
	'july'				=> '七月',
	'august'			=> '八月',
	'september'			=> '九月',
	'october'			=> '十月',
	'november'			=> '十一月',
	'december'			=> '十二月',
	'jan'				=> '一',
	'feb'				=> '二',
	'mar'				=> '三',
	'apr'				=> '四',
	'may'				=> '五',
	'jun'				=> '六',
	'jul'				=> '七',
	'aug'				=> '八',
	'sep'				=> '九',
	'oct'				=> '十',
	'nov'				=> '十一',
	'dec'				=> '十二',
	'monday'			=> '星期一',
	'tuesday'			=> '星期二',
	'wednesday'			=> '星期三',
	'thursday'			=> '星期四',
	'friday'			=> '星期五',
	'saturday'			=> '星期六',
	'sunday'			=> '星期天',
	'mon'				=> '一',
	'tue'				=> '二',
	'wed'				=> '三',
	'thu'				=> '四',
	'fri'				=> '五',
	'sat'				=> '六',
	'sun'				=> '日'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> '收件',
	'direction_out'		=> '发件',
	'recipient_from'	=> '来至',
	'recipient_to'		=> '投递',
	'check_recipient'	=> '请输入正确地址',
	'check_subject'		=> '请输入标题',
	'check_injection'	=> '发现邮件头注入行为',
	'check_active'		=> '邮件提醒未激活'
);
