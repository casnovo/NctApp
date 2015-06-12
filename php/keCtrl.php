<?php
/**
 * Created by IntelliJ IDEA.
 * User: mi12age
 * Date: 13/6/2558
 * Time: 1:12
 */
include config2.php;

$meSQL = "SELECT * FROM `kindevidence` ";
$stmt = $meConnect->prepare($meSQL);
$stmt->execute();
$b=0;
while($row = $stmt->fetch( PDO::FETCH_ASSOC )){};
?>