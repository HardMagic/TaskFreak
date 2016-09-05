<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.4                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'en_GB.utf8', 'en_US.utf8', 'en_EN', 'en');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Form bazı hatalar var - Bilgi kayıt edilemedi!',
  'field_compulsory'	=>	'Bu alan zorunlu'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "Şifre uyumsuz",
  "user_pass_limit1" => "Şifre şu aralıkta olmalı ",
  "user_pass_limit2" => " ile ",
  "user_pass_limit3" => " karakter",
  "user_pass_empty" => "şifre boş olamaz",
  "user_pass_invalid" => "Hatalı şifre",
  "user_name_limit1" => "Kullanıcı adı şu aralıkta olmalı ",
  "user_name_limit2" => " ile ",
  "user_name_limit3" => " karakter",
  "user_name_exists" => "Bu kullanızı zaten kullanılıyor",
  "user_name_empty" => "Kullanıcı adını tekrar giriniz",
  "user_name_invalid" => "Kullanıcı adı özel karakterler içermemeli",
  "user_name_not_found" => "Kullanıcı bulunamadı",
  "user_disabled" => "Hesap aktif değil",
  "user_forbidden" => "Girişiniz kabul edilmedi.",
  "user_email_empty" => "Email adresinizi giriniz",
  "user_email_format" => "Email adresiniz hatalı",
  "user_email_invalid" => "Email adresi bulunamadı",
  "user_password_invalid" => "Hatalı şifre",
  "email_empty" => "Email adresinizi giriniz",
  "email_exists" => "bu email adresi ile bir hesap zaten açılmış",
  "email_invalid" => "geçerli bir email adresi giriniz",
  "document_wrong_type" => "hatalı dosya tipi",
  "document_empty" => "bir dosya seçin",
  "common_name_empty" => "bir isim girin",
  "common_title_empty" => "bir başlık girin",
  "common_theme_empty" => "please select a theme",
  "common_description_empty" => "bir açıklama girin",
  "common_message_empty" => "bir mesaj girin",
  "common_date_empty" => "bir tarih girin",
  "common_date_invalid" => "bitiş tarihi geçerli değil",
  "common_city_empty" => "bir şehir seçin",
  "common_info_empty" => "iletişim bilgilerinizi giriniz",
  "common_url_empty" => "bir web adresi girin",
  "common_file_empty" => "'Araştır..' düğmesine basarak bir dosya sçiniz",
  "login_email" => "Email adreiniz",
  "login_password" => "Şifre",
  "login_error0" => "Giriş gerektiriyor",
  "login_error1" => "Şifre gerekiyor",
  "login_error2" => "Erişim engellendi",
  "login_error3" => "Hatalı kullanıcı veya şifre",
  "login_last_date" => 'Son griş tarihi',
  "login_last_address"  => 'Son giriş adresi',
  "post_user" => "kullanıcı",
  "post_category" => "kategori",
  "post_title" => "başlık",
  "post_documents" => "fotoğraf",
  "post_date" => "gönderim tarihi",
  "post_by" => "gönderen",
  "doc_file_name" => "dosya adı",
  "doc_file_size" => "dosya boyutu",
  "doc_file_type" => "dosya tipi",
  "doc_remove" => "kaldır",
  "doc_update" => "dosyaları düzelt",
  "post_description" => "açıklama",
  "button_create" => "Oluştur",
  "button_update" => "Düzelt",
  "button_delete" => "Sil",
  "button_login" => "giriş",
  "profile_update_success" => "Hesap düzeltildi",
  "url" => "Website&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'bugün',
	'tomorrow'			=> 'dün',
	'days'				=> 'gün',
	'day'				=> 'gün',
	'weeks'				=> 'hafta',
	'week'				=> 'hafta',
	'months'			=> 'ay',
	'month'				=> 'ay',
	'years'				=> 'yıl',
	'year'				=> 'yıl',
	'january'			=> 'ocak',
	'february'			=> 'şubat',
	'march'				=> 'mart',
	'april'				=> 'nisan',
	'may'				=> 'mayıs',
	'june'				=> 'haziran',
	'july'				=> 'temmuz',
	'august'			=> 'ağustos',
	'september'			=> 'eylül',
	'october'			=> 'ekim',
	'november'			=> 'kasım',
	'december'			=> 'aralık',
	'jan'				=> 'oca',
	'feb'				=> 'sub',
	'mar'				=> 'mar',
	'apr'				=> 'nis',
	'may'				=> 'may',
	'jun'				=> 'haz',
	'jul'				=> 'tem',
	'aug'				=> 'ağu',
	'sep'				=> 'eyl',
	'oct'				=> 'eki',
	'nov'				=> 'kas',
	'dec'				=> 'ara',
	'monday'			=> 'pazartesi',
	'tuesday'			=> 'salı',
	'wednesday'			=> 'çarşamba',
	'thursday'			=> 'perşembe',
	'friday'			=> 'cuma',
	'saturday'			=> 'cumartesi',
	'sunday'			=> 'pazar',
	'mon'				=> 'pzt',
	'tue'				=> 'sal',
	'wed'				=> 'çar',
	'thu'				=> 'per',
	'fri'				=> 'cum',
	'sat'				=> 'cmt',
	'sun'				=> 'paz'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'OUT',
	'recipient_from'	=> 'Kimden',
	'recipient_to'		=> 'Kime',
	'check_recipient'	=> 'Alıcı adreslerini giriniz',
	'check_subject'		=> 'Konuyu giriniz',
	'check_injection'	=> 'Email başlığı enjeksiyonu tespit edildi',
	'check_active'		=> 'Email alrm sistemi aktif değil'
);
