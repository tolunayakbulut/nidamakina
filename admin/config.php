<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Istanbul');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'nidamaki_1';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}
