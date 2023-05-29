<?php
    require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
    ini_set('session.cookie_lifetime', 86400);
    session_start();
    $sql="SELECT id, email, pass from visitor where email='".$_POST['auth_email']."'";
    $auth_info=$db->Select($sql);
    
    if($auth_info[0]['pass'] != $_POST['auth_pass']) echo 'Неверный пароль!';
    if($auth_info[0]['pass'] == $_POST['auth_pass'])
    {
        // echo "blyat zashli suda";
        $_SESSION['user_id'] = $auth_info[0]['id'];
        // echo json_encode($_SESSION);
        echo '<script>window.location.href = "./user.php?id='.$_SESSION['user_id'].'";</script>';
    }
?>