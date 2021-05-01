<?php

    if (!isset($_COOKIE['value'])) {
        echo "초기화 되었습니다! <br />";
        setcookie('value', 0);
    }

    else if (isset($_GET['mode']) && $_GET['mode'] === 'up')
        setcookie('value', $_COOKIE['value'] + 1);

    else if (isset($_GET['mode']) && $_GET['mode'] === 'down')
        setcookie('value', $_COOKIE['value'] - 1);

?>

<p>카운트: <?=isset($_COOKIE['value']) ? $_COOKIE['value'] : 0 ?></p>
<a href="?mode=up">올리기</a>
<a href="?mode=down">내리기</a>

