
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
       
        <link rel="icon" type="image/png" href="icons8-3d-очки-48.png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </head>
<?php

define('email', 'admin@admin.ru'); // определяем имя для входа админа
define('pass', 'admin'); // пароль администратора в хэш виде


//require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
session_start();
$email = $_POST['auth_email'];
$pass = $_POST['auth_pass'];
if ($email == email) // если введенное пользователем мыло - это имя администратора (admin@admin)
{
if ($pass == pass) // если пароли совпадают
{
$_SESSION['user_id'] = -1;

echo '<script>window.location.href = "./adminmenu.php?id=' . $_SESSION['user_id'] . '";</script>';
}
else {
    echo '<script type="text/javascript"> alert("Неверный пароль. Пожалуйста, попробуйте снова.");</script>';
    echo '<script>window.location.href = "./adminenter.php?id=' . $_SESSION['user_id'] . '";</script>';
}
}
?>