<?php
    function cookiePrint() {
        if(!isset($_COOKIE["count"])) {
            setcookie("count", 0);
            echo 0;
        } else {
            echo $_COOKIE["count"];
        }
    }
    function cookieCount() {
        if (isset($_COOKIE["count"]) && $_POST["btn"] == "up") {
            setcookie("count", $_COOKIE["count"] + 1);
        } else if (isset($_COOKIE["count"]) && $_POST["btn"] == "down") {
            setcookie("count", $_COOKIE["count"] - 1);
        }
    }
    session_start();
    if(isset($_SESSION["id"])) {
        cookieCount();
        cookiePrint();
    } else {
        echo "<script>alert(\"It's need login!\");</script>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>counter</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="counter.php" method="post">
            <input type="submit" name="btn" value="up">
            <input type="submit" name="btn" value="down">
        </form>
    </body>
</html>