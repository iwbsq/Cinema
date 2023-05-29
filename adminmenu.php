<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
       
        <link rel="icon" type="image/png" href="icons8-3d-очки-48.png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </head>

    <body style="margin-top: 80px; background: linear-gradient(to right, #000012, #6c6c6c);">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a style="height: 50px;" href="" class="navbar-brand">CinemaMSK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" 
                aria-controls="navarContent" aria-expanded="false">
                <span class="navbar-toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto mb-2">
                        <li class="nav-item">
                            <a href="adminmenu.php" class="nav-link">Вернуться в панель администратора</a>
                        </li>
                       
                    </ul>
                
                    <div class="d-flex">  
                        <a href="index.php"><button class="btn btn-outline-danger" >Выйти</button></a>
                    
                    </div>

                </div>
            </div>
        </nav>

<?php 
session_start();
?>

<div class="">
<div class='card-header'>

</div>
<div class='card-body'>
<a href='filmr.php'><button type='button' class='btn btn-lg btn-block btn-outline-primary'>Редактировать таблицу "Фильмы"</button></a>
<a href='timetabler.php'><button type='button' class='btn btn-lg btn-block btn-outline-primary'>Редактировать таблицу "Расписание"</button></a>
<a href='barr.php'><button type='button' class='btn btn-lg btn-block btn-outline-primary'>Редактировать таблицу "Мини-бар"</button></a>

</div>
</div>";

