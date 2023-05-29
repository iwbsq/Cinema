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
                <a style="height: 50px" href="index.php" class="navbar-brand">CinemaMSK</a>
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
            <div style="display: flex; flex-wrap: wrap; margin: 100px; justify-content: space-evenly; flex-direction: row;" class="food-list">


            <?php
                require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');

                $sql = "SELECT * FROM bar";

                $bar = $db->Select($sql);

                foreach ($bar as $product)
                {
                    echo '<div class="container my-6">';
                    echo '<div class="row2">';

                    /*echo "
                        <div class='col-md-4'>
                            <img class='w-100' src='".$product['img']."'>
                        </div>
                    ";*/

                    echo "
                        <div class='col text-left'>
                            <h2>".$product['name']."</h2>
                            <p>".$product['volume/weight']." </p>
                            <p>Цена: ".$product['cost']." руб.</p>
                        </div>
                    ";

                    echo '</div>';
                    echo '</div>';
                }
            ?>
            </div>
            <!-- <div class="barbtn">
                <a href='barOrder.php?'><button class='btn-about-bar'>Сделать заказ!</a></button> 
            </div> -->
        </main>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>

