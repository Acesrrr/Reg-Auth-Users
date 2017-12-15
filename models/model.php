<?php
//класс для работы с сессиями
class Session {
    
	public static function start() {
        session_start();
    }
    
	public static function set($key,$value){
        $_SESSION[$key] = $value;
    }
    
	public static function get($key){
        if(isset($_SESSION[$key])||!empty($_SESSION[$key]) ) {
            return $_SESSION[$key];
        }
        else {return NULL;}
    }
    
	public static function destroy(){
        session_destroy();
    }
}

//класс-модель для работы с таблицей users
Class Model_Users {
     
	public $datetime;
    public $name;
    public $password;
	public $email;
	public $phone_num;
	public $id_role;
	public $ip;
	public $confirm;
	//конструктор класса с подлючениями
	public function __construct() {
        // объект бд коннекта
        global $dbObject;
		global $db_connect;
        $this->db = $dbObject;
		$this->db_connect = $db_connect;
	}	
	//функция очистки полей формы при вводе(защита от инъекций)
	public function clear_string($str) {
		$db_connect=$this->db_connect;
		$str = strip_tags($str);
		$str =$db_connect->real_escape_string($str);
		$str = trim($str);
		return $str;
	}
	//авторизация пользователя
	public function auth_user(){
		$auth_email=$this->clear_string($_POST["auth_email"]);
		$auth_pass=$this->clear_string($_POST["auth_password"]);
		$auth_pass2=strrev($auth_pass);
		$auth_pass3="pass1".$auth_pass2."pass2";
		$auth_pass4=md5($auth_pass3);
		setcookie('rememberme',$auth_email.'+'.$auth_pass,time()+3600*24*1,"/");
		$db = $this->db;
		$query=$db->query("SELECT * FROM users WHERE email='$auth_email' AND password='$auth_pass4'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$row=$query->fetch();
		return $row;
	}
	//поиск пользователя в базе данных по куки
	public function auth_user_cookie($login){
		$db = $this->db;
		$query=$db->query("SELECT * FROM users WHERE email='$login'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$row=$query->fetch();
		return $row;
	}
	//сохранение пользователя в базе данных
	public function save_users(){
		$error=array();
		$name=$this->clear_string($_POST['user_name']);
		$surname=$this->clear_string($_POST['user_surname']);
		$email=$this->clear_string($_POST['user_email']);
		$phone_num=$this->clear_string($_POST['user_phone_num']);
		$pass=$this->clear_string($_POST['user_password']);
		$pass_repeat=$this->clear_string($_POST['user_password_repeat']);
		$image=getdate()[0];
		if (strlen($email)<7 or strlen($email)>30 or !preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($email))) {
			$error[] = "Введенный Email некорректный!";
		}	
		else {
			
			$login = $this->check_email($email);	
			
			if ($login) {
				$error[] = "Пользователь с таким Email уже зарегистрирован!";
			}
		}
		if (strlen($name)<3 or strlen($name)>15) $error[] = "Укажите имя от 3 до 15 символов!";
		if(!$phone_num)$error[] = "Укажите номер телефона!";
		if (strlen($pass)<7 or strlen($pass)>15) $error[] = "Укажите пароль от 7 до 15 символов!";
		if (strlen($pass_repeat)<7 or strlen($pass_repeat)>15 or $pass_repeat!=$pass) $error[] = "Введенные пароли не совпадают!";
		$path = $_SERVER['DOCUMENT_ROOT'].'/files/images/';
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$filename=$image.'.jpg'; 

			if (!@copy($_FILES['user_image']['tmp_name'], $path . $filename)) {
				echo 'фото не загрузилось';
			}
			else {$filepath='/files/images/' . $filename;}
		}
		if (count($error)) {
			echo implode('<br />',$error);
		}
		else {
			$pass1=strrev($pass);
			$pass2="pass1".$pass1."pass2";
			$password=md5($pass2);
		
			$db = $this->db;
			$stmt = $db->prepare("INSERT INTO users (datetime,name,surname,password,email,phone_num,image) VALUES (NOW(),?,?,?,?,?,?)");
			$stmt->execute(array($name,$surname,$password,$email,$phone_num,$filepath));
			return 'true';
			}
	}
	public function check_email($email) {
		$db = $this->db;
		$query=$db->query("SELECT * FROM users WHERE email='$email'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$row=$query->fetch();
		return $login;
	}
}


?>
