<?php
require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
session_start();

$id=$_GET['id'];


$film_name=$_POST['film_name'];
$type=$_POST['type'];
$date=$_POST['date'];
$time=$_POST['time'];
$hall_number=$_POST['hall_number'];
$cost=$_POST['cost'];


$db->Execute("UPDATE `timetable` SET 
`film_name`='$film_name',
`type`='$type',
`date`='$date',
`time`='$time',
`hall_number`='$hall_number',
`cost`='$cost'
WHERE id_seans=$id");

header('Location: ./adminmenu.php');
?>