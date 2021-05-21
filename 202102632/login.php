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

    session_start();
    if($_SESSION["isLogin"]) {
        echo $_SESSION["id"];
    }
?>

<html>
    <head>
        <title>login</title>
        <style>
            #login {
                border: 1px solid black;
                border-radius: 3px;
                width: 50%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div id="login">
            <form action="login_proc.php" method="post">
                <input type="text" name="id" placeholder="input ID">
                <input type="password" name="password" placeholder="input Password">
                <input type="submit" value="login">
            </form>
            <form action="logout.php" method="post">
                <input type="submit" value="logout">
            </form>
        </div>
    </body>
</html>
