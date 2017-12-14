<?php
require_once $_SERVER['DOCUMENT_ROOT']."/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/model.php";
		//обращаемся к модели
		$model_users=new Model_Users();
		$result=$model_users->auth_user();
		if($result) {
			Session::start();
			Session::set('auth','yes_auth');
			Session::set('auth_email',$result["email"]);
			Session::set('auth_name',$result["name"]);
			echo 'yes_auth';
		}
		else {
			echo 'no_auth';
		}
?>
