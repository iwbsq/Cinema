<?php
require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
session_start();
$id=$_POST['id'];
$name=$_POST['name'];
$volume=$_POST['volume/weight'];
$cost=$_POST['cost'];


$db->Execute("INSERT INTO `bar`(`id`, `name`, `volume/weight`, `cost`) 
VALUES ('$id', '$name', '$volume', '$cost')");

header('Location: ./adminmenu.php');
?>