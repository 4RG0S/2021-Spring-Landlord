<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Login</title>
</head>
<body>
<h2>로그인</h2>
<?php if(!isset($_SESSION['user_id'])) { ?>
    <form method="post" action="login_proc.php">
        <p>아이디: <input type="text" name="user_id" /></p>
        <p>비밀번호: <input type="password" name="user_pw" /></p>
        <p><input type="submit" value="로그인" /></p>
    </form>
<?php } else {
    $user_id = $_SESSION['user_id'];
    echo "<strong>$user_id</strong>님 안녕하세요? ";
    echo "<a href=\"logout.php\">[로그아웃]</a></p>";
} ?>
</body>
</html>