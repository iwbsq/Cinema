                            
                            
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
    <div class="form_auth_block" style="padding: 5px; border-radius: 15px;">
        <div class="form_auth_block_content">


    <h3 class="form_auth_block_head_text" style="margin: 80px auto;  text-align: center; color: white;" >Авторизация </h3>
    <form class="form_auth_style" action="check2.php" method="post" style="margin: 80px auto; width: 300px;">
                
    <input type="email" name="auth_email" placeholder="Введите email" required >

    <input type="password" name="auth_pass" placeholder="Введите пароль" required >
    <a href='index.php'><button class="form_auth_button" button type="submit" name="form_auth_submit">Войти</button>
    

</form>

<a href='adminenter.php'><button class="form_adm_button"  name="form_adm_submit">Я администратор</button>
</div>
</body>