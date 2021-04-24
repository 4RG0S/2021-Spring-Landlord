<!DOCTYPE html>

<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
    <form action="calculator.php" method="post">
        <input type="number" name="a">
        <select name="operator" id="operator">
            <option value="plus">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="b">
        <br>
        <input type="submit" value="submit">
    </form>
    </body>
</html>

<?PHP
    $A = $_POST["a"];
    $B = $_POST["b"];
    $op = $_POST["operator"];

    echo "$A ";
    echo "$op ";
    echo "$B <br>";

    switch($op) {
        case "plus":
            echo $A + $B;
            break;
        case "subtract":
            echo $A - $B;
            break;
        case "multiply":
            echo $A * $B;
            break;
        case "division":
            echo $A / $B;
            break;
    }
?>
