<?php
require_once $_SERVER['DOCUMENT_ROOT']."/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/model.php";

		//создаем соединение с базой и объект PDO
		$charset = 'utf8';
		$opt = [
				PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES   => false,
			];  
		$dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME.';charset='.$charset, DB_USER, DB_PASS,$opt);
		$db_connect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		
		//обращаемся к модели
		$model_users=new Model_Users();
		$result=$model_users->save_users();
		echo $result;
 
?>
