<?php
require_once('/home/o/o90409bc/o90409bc.beget.tech/public_html/db.php');
session_start();

$id=$_GET['id'];
$db->Execute("DELETE FROM bar WHERE id=$id");

header('Location: ./adminmenu.php');
?>