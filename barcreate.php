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
        <main>
        <form action="barcheck.php" method="post" style="margin: 80px auto; width: 500px;">

            <input type="int" class="form-control" name="id"
                id="id" required placeholder="id"><br>
            <input type="text" class="form-control" name="name"
                id="name" required placeholder="Название позиции"><br>
            <input type="text" class="form-control" name="volume/weight"
                id="volume/weight" required placeholder="Вес/объем"><br>
            <input type="int" class="form-control" name="cost"
                id="cost" required placeholder="Цена"><br>
            
           
          
            <button class="btn btn-success" type="submit">Добавить позицию</button>
        </form>
        </div>


        </main>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>