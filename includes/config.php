<?php
require_once(dirname(__FILE__) . "/../vendor/autoload.php");

ob_start(); //Turn on output buffering
session_start();
date_default_timezone_set("Asia/Taipei");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try{
	$con = new PDO("mysql:dbname=$_ENV[DB_NAME];host=$_ENV[DB_HOST]", $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$con->exec("SET NAMES UTF8");
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>