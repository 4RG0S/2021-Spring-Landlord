<?php
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
