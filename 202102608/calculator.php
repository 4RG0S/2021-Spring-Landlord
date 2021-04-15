<HTML>
    <form action = "calculator.php" method = "post">
        <input type = "text" name = "input" value = "" placeholder = "숫자">
        <br>
        <input type = "radio" name = "operation" value = "+">
        +
        <input type = "radio" name = "operation" value = "-">
        -
        <input type = "radio" name = "operation" value = "*">
        *
        <input type = "radio" name = "operation" value = "/">
        /<br>
        <input type = "text" name = "input2" value = "" placeholder = "두번째 숫자">
        <input type = "submit" name = "button" value = "계산">

        <br>


        <?php

        $num1 = $_POST["input"] ;
        $num2 = $_POST["input2"] ;
        $calc = $_POST["operation"] ;
        $result =" ";

        if ($calc == "+"){
            $result = $num1 + $num2;
        }
        if ($calc == "-"){
            $result = $num1-$num2;
        }
        if ($calc == "*"){
            $result = $num1 * $num2;
        }
        if ($calc == "/"){
            if ($num2 == 0){
                $result ="0나눗셈 x";
            }else {
                $result = $num1/$num2;
            }
        }
        echo $result;
        ?>
</HTML>




