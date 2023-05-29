<?php header('Location: ./index.php');?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css"><?php


 $surname = filter_var(trim($_POST['surname']),
 FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['name']),
 FILTER_SANITIZE_STRING) ;
 $lastname = filter_var(trim($_POST['lastname']),
 FILTER_SANITIZE_STRING) ;
 $phone = filter_var(trim($_POST['phone']),
 FILTER_SANITIZE_STRING) ;
 $email = filter_var(trim($_POST['email']),
 FILTER_SANITIZE_STRING) ;
 $bday = filter_var(trim($_POST['bday']),
 FILTER_SANITIZE_STRING) ;
 $pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING) ;

 if(mb_strlen($pass) < 6 || mb_strlen($pass) > 20) {
 echo "Недоспутимая длина пароля (от 6 до 20 символов)";
 exit();
 }


require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');



$db->Execute("INSERT INTO `visitor`(`id`, `surname`, `name`, `lastname`, `phone`, `email`, `bday`, `pass`) 
VALUES (null,'$surname','$name','$lastname','$phone','$email','$bday','$pass')");

//echo json_encode($db );
?>