<?php
/*
* set var
*/
$cfHostdb = "mysql:host=localhost;dbname=nctapp;charset=UTF8";
$cfUser = "root";
$cfPassword = "mi124ge";


/*
* connection mysql
*/
$meConnect = new PDO($cfHostdb, $cfUser, $cfPassword);
//$meConnect = mysql_connect($cfHost,$cfUser,$cfPassword) or die("Error conncetion mysql...");
//$meDatabase = mysql_select_db($cfDatabase);
//mysql_query("SET NAMES UTF8");

?>
