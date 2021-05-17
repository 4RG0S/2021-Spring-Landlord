<?php session_start();?>

<?php
if(!isset($_SESSION['user'])){?>
    <form action = 'login_proc.php' method = 'POST'>
        <input type = 'text' name = 'id' placeholder = '아이디 입력'>
        <input type = 'password' name = 'ps' placeholder = '비밀번호 입력'>
        <input type= 'submit' value="로그인">
<?}
else{
    echo $_SESSION['user'],"님 안녕하세요"; ?>
    <form action = 'logout.php' method = 'POST'>
        <input type = 'submit' value = '로그아웃'>
<?}?>

