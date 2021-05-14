<? include ("header.php") ?>

<?
    // empty는 !isset 과 같은 기능을 가지는 함수
    if (empty($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }

    // 현재 상태 체크 (카운트 모드)
    $count_mode = isset($_GET['mode']) ? $_GET['mode'] : NULL;

    // 로그인 했을때만 작동하도록 하기 위해 검사
    if ($login_name) {
        if ($count_mode === "up") {
            $_SESSION['count']++;
        } else if ($count_mode === "down") {
            $_SESSION['count']--;
        }
    } else {
        echo "카운터는 로그인 했을때만 작동합니다!";
    }

    // 카운트 값 불러오기
    $count = $_SESSION['count'];
?>

<p>카운트: <?=$count?></p>
<p>
    <a href="?mode=up">올리기</a>
    <a href="?mode=down">내리기</a>
</p>

<? include ("footer.php") ?>