<?php
	include "database/connection.php";
	include "classes/user.php";
	include "classes/tweet.php";
	include "classes/follow.php";
	global $connect;
	session_start();
	$getFromU = new User($connect);
	$getFromF = new Tweet($connect);
	$getFromF = new Follow($connect);
	
	define("BASE_URL", "http://13.235.71.220/photoshala/");
?>
