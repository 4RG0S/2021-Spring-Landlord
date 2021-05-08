<?php
if ( !isset($_POST['user_id']) || !isset($_POST['user_pw']) ) {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
    echo "window.location.replace('login.php');</script>";
    exit;
}
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$members = array(
    'lee' => array('password' => '1234')
);

if( !isset($members[$user_id]) || $members[$user_id]['password'] != $user_pw ) {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
    echo "window.location.replace('login.php');</script>";
    exit;
}
/* If success */
session_start();
$_SESSION['user_id'] = $user_id;
?>
<meta http-equiv="refresh" content="0;url=login.php" />