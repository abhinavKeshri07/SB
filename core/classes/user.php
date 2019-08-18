<?php
	class User {
		protected $connect;
		function __construct($connect){
			$this->connect = $connect;
		}
		public function checkInput($var){
			$var = htmlspecialchars($var);
			$var = trim($var);
			$var = stripcslashes($var);
			return $var;
		}
		public function login($email, $password){
			$query = "SELECT user_id FROM users WHERE email = '".$email."' AND passwd = '".$password."'";
			$result = mysql_query($query);
			$count = mysql_numrows($result);
			if($count > 0){
				$_SESSION['user_id'] = mysql_result($result, 0, "user_id");
				header('Location: home.php');
			}else{
				return false;
			}
		}
		public function userData($user_id){
			$query = "SELECT * FROM users WHERE user_id='".$user_id."'";
			$result = mysql_query($query);
			return $result;
		}
		public function logout(){
			$_SESSION = array();
			session_destroy();
			header('Location: ../index.php');
		}
		public function checkEmail($email){
			$query = "SELECT email from users WHERE email = '".$email."'";
			$result = mysql_query($query);
			$count = mysql_numrows($result);
			if(count > 0){
				return true;
			}else{
				return false;
			}
		}
	}
?>
