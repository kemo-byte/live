<?php

$dsn = "mysql:host=localhost;dbname=live";
$user = "root";
$pass = "";





// date_default_timezone_set('Africa/Cairo');
 date_default_timezone_set('Africa/Khartoum');
// date_default_timezone_set('Asia/Kuwait');

$option = array(

	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

);

try {

	$conn = new PDO($dsn, $user, $pass, $option);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'failed ' . $e->getMessage();
	$error = $e->getMessage();
	// include('db_error.php');
	exit();
}
