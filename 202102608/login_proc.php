<?php
$id = 'admin';
$ps = '1234';

$login_id = $_POST['id'];
$login_ps = $_POST['ps'];

if($login_id != $id || $login_ps != $ps){
    header('Location:login.php');
}
else {
    session_start();
    $_SESSION['user'] = $id;
    header('Location:login.php');
}?>

