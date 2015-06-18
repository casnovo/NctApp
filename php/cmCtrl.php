<?php
/**
 * Created by IntelliJ IDEA.
 * User: mi12age
 * Date: 13/6/2558
 * Time: 15:55
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include 'config2.php';

$meSQL = "SELECT * FROM `commander` ";
$stmt = $meConnect->prepare($meSQL);
$stmt->execute();
$rows = array();
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rows);
?>