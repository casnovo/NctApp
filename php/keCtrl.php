<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'config2.php';

$meSQL = "SELECT * FROM `kindevidence` ";
$stmt = $meConnect->prepare($meSQL);
$stmt->execute();
$rows = array();
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rows);
?>