<?php 
 header("Content-Type: text/html; charset=UTF-8");
 session_start();
 echo json_encode($_SESSION);
 ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="favicon.png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>

    <body style=" background: linear-gradient(to right, #000012, #6c6c6c);">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a style="height: 50px" href="user.php" class="navbar-brand">CinemaMSK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" 
                aria-controls="navarContent" aria-expanded="false">
                <span class="navbar-toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto mb-2">
                        <li class="nav-item">
                            <a href="user.php" class="nav-link">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="timetable2.php" class="nav-link">Расписание</a>
                        </li>
                        <li class="nav-item">
                            <a href="bar2.php" class="nav-link">Мини-бар</a>
                        </li>
                        
                    </ul>
                
                <div class="d-flex">  
                    <a href="index.php"><button class="btn btn-outline-danger" >Выйти</button></a>
                    
                 </div>



                </div>
            </div>
        </nav>
       
        <main>
            <div class="carousel slide" id="carouselControls" data-ride="carousel">
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/maxresdefault.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/jeTbgBvpeFt5cpIFeCgT03EV6KD.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/Fate-of-the-Furious-2017-Wallpaper-fast-and-furious-43983632-1920-1080.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/TVNSONYHD.COM_VUBH0000000072456602.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/76243cb947b0930665c84374d045e652.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/beyond_1.jpg" alt="">
                    </div>
                </div>

                <a class="carousel-control-prev" role="button" href="#carouselControls" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" role="button" href="#carouselControls" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        
            <?php
               
                require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');

                $sql = "SELECT * FROM films";

                $len_to_cut = 240;

                $films = $db->Select($sql);

                

                foreach ($films as $film)
                {
                    echo '<div class="container my-5">';
                    echo '<div class="row">';

                    echo "
                        <div class='col-md-4'>
                            <img class='w-100' src='".$film['img']."'>
                        </div>
                    ";

                    echo "
                        <div class='col-md-8 text-center'>
                            <h2>".$film['film_name']."</h2>
                            <p>".(strlen($film['description']) >= $len_to_cut ? mb_substr($film['description'], 0, $len_to_cut).'...' : $film['description'])."</p>
                            <a href='aboutFilm2.php?id=".$film['id']."'><button class='btn-about-film'>Подробнее</button></a>
                        </div>
                    ";

                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>

