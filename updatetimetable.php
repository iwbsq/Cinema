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
            require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
            session_start();

            $id_seans=$_GET['id'];

            $sql="SELECT * FROM timetable WHERE id_seans=$id_seans";
            $timetable=$db->Select($sql)[0];
            
            echo "
                <form action='updatetimetable2.php?id=".$timetable['id_seans']."' method='post' style='margin-top:80px'>
                    
                    <input type='hidden' name='id_seans' value='" . $timetable['id_seans'] . "'>

                    <label for='film_name'>Название фильма:</label>
                    <input type='int' name='film_name' id='film_name' value='" . $timetable['film_name'] . "'>
                    <br>
                    <label for='position'>Тип показа:</label>
                    <input type='text' name='type' id='type' value='" . $timetable['type'] . "'>
                    <br>
                    <label for='position'>Дата:</label>
                    <input type='date' name='date' id='date' value='" . $timetable['date'] . "'>
                    <br>
                    <label for='position'>Время:</label>
                    <input type='time' name='time' id='time' value='" . $timetable['time'] . "'>
                    <br>
                    <label for='position'>Номер зала:</label>
                    <input type='int' name='hall_number' id='hall_number' value='" . $timetable['hall_number'] . "'>
                    <br>
                    <label for='position'>Цена:</label>
                    <input type='int' name='cost' id='cost' value='" . $timetable['cost'] . "'>
                    <br>
                    
                    <input type='submit' value='Сохранить изменения'>
</form>
        ";
            echo json_encode($timetable['id']);
        ?>   


        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>