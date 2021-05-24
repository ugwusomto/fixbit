<?php 
require_once "../config/config.php";
if(empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/login.php';
	header("Location: $path");
	exit();
}


session_destroy();
header("Location: login.php");
exit();