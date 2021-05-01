<?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            echo $a + $b;
            break;

        case '-':
            echo $a - $b;
            break;

        case '*':
            echo $a * $b;
            break;

        case '/':
            echo $a / $b;
            break;

        default:
            echo "wrong operator!";
    }

