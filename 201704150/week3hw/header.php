<?
    // 항상 세션을 시작하도록 공통 header에 session_start() 삽입
    // 이후 session_start()를 중복으로 실행하지 않도록 주의!
    session_start();

    // 로그인 되었을 경우 출력할 이름
    $login_name = NULL;

    // login_name이 세션에 존재하는지 확인
    // 존재할 경우 $login_name에 값 입력
    if (isset($_SESSION["login_name"])) {
        $login_name = $_SESSION["login_name"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>3주차 과제 :: 로그인</title>
    </head>
    <body>
        <!-- 이 주석은 로그인을 하지 않아도 보임! -->
        <? if ($login_name) :?>
        <!-- 이 주석은 로그인하지 않으면 안 보임! -->
        <p><?=$_SESSION["login_name"]?>님 안녕하세요! <a href="logout.php">로그아웃</a></p>
        <? endif; ?>

        <h4>메뉴판</h5>
        <p>
            <a href="login.php">로그인 페이지</a>
            <a href="counter.php">카운터 페이지</a>
        </p>