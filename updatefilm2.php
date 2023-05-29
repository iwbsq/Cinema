<?php
require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
session_start();

$id=$_GET['id'];


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

$db->Execute("UPDATE `films` SET 
`film_name`='$film_name',
`genre`='$genre',
`country`='$country',
`yearf`='$yearf',
`director`='$director',
`stars`='$stars',
`age_rest`='$age_rest',
`duration`='$duration',
`description`='$description',
`img`='$img' 
WHERE id=$id");

header('Location: ./adminmenu.php');
?>