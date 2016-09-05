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

setLocale(LC_ALL,"zh_CN.utf8");

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> '表格中有錯誤，信息未保存。',
  "field_compulsory"	=>	"該項目是必須的"
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "密碼不正確",
  "user_pass_limit1" => "密碼字符個數必須在",
  "user_pass_limit2" => " 到",
  "user_pass_limit3" => " 之間",
  "user_pass_empty" => "密碼不能為空",
  "user_pass_invalid" => "密碼無效",
  "user_name_limit1" => "用戶名字符個數必須在",
  "user_name_limit2" => " 到",
  "user_name_limit3" => " 之間",
  "user_name_exists" => "用戶名已經存在",
  "user_name_empty" => "請輸入用戶名",
  "user_name_invalid" => "用戶名中不能存在特殊字符或空格",
  "user_name_not_found" => "用戶不存在",
  "user_disabled" => "此用戶已被禁用",
  "user_forbidden" => "驗證失敗",
  "user_email_empty" => "請輸入您的Email地址",
  "user_email_format" => "請輸入有效的Email地址",
  "user_email_invalid" => "Email不存在",
  "user_password_invalid" => "密碼錯誤",
  "email_empty" => "請輸入您的Email地址",
  "email_exists" => "另一個用戶已經使用了該Email地址",
  "email_invalid" => "請輸入一個有效的Email地址",
  "document_wrong_type" => "文件類型錯誤",
  "document_empty" => "請選擇一個文件",
  "common_name_empty" => "請輸入名字",
  "common_title_empty" => "請輸入標題",
  "common_theme_empty" => "請選擇一個主題",
  "common_description_empty" => "請輸入描述",
  "common_message_empty" => "請輸入消息內容",
  "common_date_empty" => "請選擇日期",
  "common_date_invalid" => "結束日期無效",
  "common_city_empty" => "請輸入城市名稱",
  "common_info_empty" => "請輸入聯絡人信息",
  "common_url_empty" => "請輸入web地址",
  "common_file_empty" => "請在點擊'瀏覽'按鈕後選擇一個文件",
  "login_email" => "Email地址",
  "login_password" => "密碼",
  "login_error0" => "需要登入",
  "login_error1" => "需要密碼",
  "login_error2" => "禁止訪問（受限制頁面）",
  "login_error3" => "無效的用戶名或密碼",
  "login_last_date" => '上次登入時間',
  "login_last_address"  => '上次登入地址',
  "post_user" => "用戶名",
  "post_category" => "分類",
  "post_title" => "標題",
  "post_documents" => "相片",
  "post_date" => "發表於",
  "post_by" => "由",
  "doc_file_name" => "文件名",
  "doc_file_size" => "文件大小",
  "doc_file_type" => "文件類型",
  "doc_remove" => "刪除",
  "doc_update" => "上傳文件",
  "post_description" => "描述",
  "button_create" => "創建",
  "button_update" => "更新",
  "button_delete" => "刪除",
  "button_login" => "登入",
  "profile_update_success" => "成功更新用戶信息",
  "url" => "網址&nbsp;:&nbsp;",
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
	'direction_out'		=> '發件',
	'recipient_from'	=> '來至',
	'recipient_to'		=> '投遞',
	'check_recipient'	=> '請輸入收件人地址',
	'check_subject'		=> '請輸入標題',
	'check_injection'	=> '發現郵件標頭注入行為',
	'check_active'		=> '郵件提醒未啟動'
);
