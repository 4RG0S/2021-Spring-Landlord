<?php
    session_start();
    if($_SESSION["isLogin"]) {
        $_SESSION["isLogin"] = false;
        unset($_SESSION["id"]);
    }
?>

<script>location.replace("./login.php");</script>
