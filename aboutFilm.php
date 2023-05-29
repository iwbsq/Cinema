<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
       
        <link rel="icon" type="image/png" href="icons8-3d-очки-48.png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </head>

    <body style=" background: linear-gradient(to right, #000012, #6c6c6c);">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a style="height: 50px;" href="index.php" class="navbar-brand">CinemaMSK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" 
                aria-controls="navarContent" aria-expanded="false">
                <span class="navbar-toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto mb-2">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="timetable.php" class="nav-link">Расписание</a>
                        </li>
                        <li class="nav-item">
                            <a href="bar.php" class="nav-link">Мини-бар</a>
                        </li>
                        
                    </ul>
                
                    <div class="d-flex">  
                    <a href="auth2.php"><button class="btn btn-outline-success" data-target="#winModal">Войти</button></a>
                    <a href="registration.php"><button class="btn btn-outline-success" data-target="#winModal">Зарегистрироваться</button></a>
                    
                 </div>

                </div>
            </div>
        </nav>
        

        <main>
        <?php
            require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
            $id = $_GET['id'];
            $sql = "SELECT 
                films.id,
                films.film_name,
                films.genre,
                films.country,
                films.yearf,
                genre.genre_name,
                country.country_name,
                director.name AS director_name,
                director.surname AS director_surname,
                director.country AS director_country,
                stars.name AS stars_name,
                stars.surname AS stars_surname,
                stars.country AS stars_country,
                films.age_rest,
                films.duration,
                films.description,
                films.img
            FROM films
            INNER JOIN country
            ON country.id = films.country
            INNER JOIN genre
            ON genre.id = films.genre
            INNER JOIN director
            ON director.id = films.director
            INNER JOIN stars
            ON stars.id = films.stars
            where films.id=$id";
            $film = $db->Select($sql)[0];
            echo '<div class="container my-5">';
                    echo '<div class="row">';

                    echo "
                        <div class='col-md-3'>
                            <img class='w-100' src='".$film['img']."'>
                        </div>
                    ";

                    echo "
                        <div style='margin-top: 80px;' class='col-md-8 text-center'>
                            <h2>".$film['film_name']."</h2>
                            <p>".$film['description']."</p>
                            
                        </div>
                    ";

                    echo '</div>';
                    echo '</div>';
           
               

                echo " 
                    <div class='col-md-4 text-left'>
                        <p>Жанр:   ".$film['genre_name']." </p>
                    </div>  
                ";
            echo '</div>';

            
                

                echo " 
                    <div class='col-md-4 text-left'>
                        <p>Страна:   ".$film['country_name']." </p>
                    </div>  
                ";
            echo '</div>';

            
                

                echo " 
                    <div class='col-md-4 text-left'>
                        <p>Год премьеры:  ".$film['yearf']." </p>
                    </div>  
                ";
            echo '</div>';

            
                

                echo " 
                    <div class='col-md-4 text-left'>
                        <p>Режиссер:   ".$film['director_name']." ".$film['director_surname'].", страна рождения: ".$film['director_country']." </p>
                    </div>  
                ";
            echo '</div>';

            
            

            echo " 
                    <div class='col-md-4 text-left'>
                        <p>В главной роли:   ".$film['stars_name']." ".$film['stars_surname'].", страна рождения: ".$film['stars_country']." </p>
                    </div>  
                ";
            echo '</div>';

               
            echo " 
                <div class='col-md-4 text-left'>
                    <p>Возрастное ограничение:   ".$film['age_rest']." </p>
                </div>  
            ";
            echo '</div>';

            
            echo " 
                <div class='col-md-4 text-left'>
                    <p>Длительность фильма:   ".$film['duration']." </p>
                </div>  
            ";
            echo '</div>';
        ?>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>