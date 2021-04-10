<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hello, HTML!</title>
    </head>
    <body>
        <?
            if (isset($_GET['login'])) {
                echo "<h1>Hello, PHP!</h1>";
            }
        ?>
        <h1>Hello, HTML!</h1>
    </body>
</html>