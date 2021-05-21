<?php
    $host = "localhost";
    $username = "202102632";
    $password = "1234";
    $dbname = "db_202102632";

    $dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
    $conn = new PDO($dsn, $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO_ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM Woorizip_Users");
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $data;

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
