<?php
require_once $_SERVER['DOCUMENT_ROOT']."/config.php"; //подключение конфигурационного файла 
require_once SITE_PATH."models/model.php"; // и модели
//получение данных из сессии, если есть
Session::start();
$auth_opt=Session::get('auth');
$auth_name=Session::get('auth_name');
$auth_pass=Session::get('auth_pass');
$auth_email=Session::get('auth_email');
	// извлечение логина из куки
	if (isset($_COOKIE['rememberme'])) {
	$str=$_COOKIE["rememberme"];
	$all_len=strlen($str);
	$login_len=strpos($str,'+');
	$login=substr($str,0,$login_len);
	$pass=substr($str,$login_len+1,$all_len);
	// получаем строку
	$model_users=new Model_Users();
	$result=$model_users->auth_user_cookie($login);
	//устанавливаем переменные сессии
	if($result) {
		Session::set('auth','yes_auth');
		$auth_opt=$_SESSION['auth'];
		Session::set('auth_email',$result['email']);
		$auth_email=$_SESSION['auth_email'];
		Session::set('auth_name',$result['name']);
		$auth_name=$_SESSION['auth_name'];
		Session::set('auth_image',$result['image']);
		$auth_image=$_SESSION['auth_image'];
	}
	}
include_once SITE_PATH."views/index/view.php";

?>