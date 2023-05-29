<?php
require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
session_start();
$id=$_POST['id'];
$film_name=$_POST['film_name'];
$genre=$_POST['genre'];
$country=$_POST['country'];
$yearf=$_POST['yearf'];
$director=$_POST['director'];
$stars=$_POST['stars'];
$age_rest=$_POST['age_rest'];
$duration=$_POST['duration'];
$description=$_POST['description'];
$img=$_POST['img'];


$db->Execute("INSERT INTO `films`(`id`, `film_name`, `genre`, `country`, `yearf`, `director`, `stars`, `age_rest`, `duration`, `description`, `img`) 
VALUES ('$id', '$film_name', '$genre', '$country', '$yearf', '$director', '$stars', '$age_rest', '$duration', '$description', '$img')");

header('Location: ./adminmenu.php');
?>