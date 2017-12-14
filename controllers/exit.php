<?php
session_start();
if (isset($_SESSION['auth_email'])) {
unset($_SESSION['auth_email']);
unset($_SESSION['auth_pass']);
unset($_SESSION['auth_name']);
unset($_SESSION['auth_phone']);
unset($_SESSION['auth_user_id']);
unset($_SESSION['auth']);
session_destroy();//удаление сессии
header("Location: http://".$_SERVER['HTTP_HOST']."/index.php");
	setcookie('rememberme','',0,"/");
}

?>