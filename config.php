<?php
//параметры подключения к базе данных
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'users_bd');
define('SITE_NAME', 'Регистрация пользователей');
define('SITE_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
//создаем соединение с базой и объект PDO
$charset = 'utf8';
$opt = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
	];  
$dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME.';charset='.$charset, DB_USER, DB_PASS,$opt);
$db_connect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

