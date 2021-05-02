<?php
    $ID = $_POST["id"];
    $PASSWORD = $_POST["password"];
    $USER_INFO = array(0 => array("ID" => "admin", "PASSWORD" => "admin"),
                       1 => array("ID" => "purplepig4657", "PASSWORD" => "admin"));

    for($i = 0; $i < count($USER_INFO); $i++) {
        if($USER_INFO[$i]["ID"] === $ID) {
            if($USER_INFO[$i]["PASSWORD"] === $PASSWORD) {
                session_start();
                $_SESSION["isLogin"] = true;
                $_SESSION["id"] = $USER_INFO[$i]["ID"];
                break;
            }
        }
    }
?>

<script>location.replace("./login.php");</script>
