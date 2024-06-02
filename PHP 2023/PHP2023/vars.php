<?php
    $var1 = "Hello";
    $var2 = "Vam ?";
    $var3 = "Vam";
    $num1 = 15;
    $num2 = 5;
    $resul;
    $resul = $num1/$num2;
    print "<p>A divisão: $resul</p>";
    $resul = $num1 * $num2;
    print "<p>A multiplicação: $resul</p>";
    $resul = $num1 + $num2;
    print "<p>A soma: $resul</p>";
    $resul = $num1 - $num2;
    print "<p>A subtração: $resul</p><br><br>
            <h1>A DOIDEIRA</h1>";
    for($n = 0; $n < 100000000000000; $n++){
        $resul = $num1 * $num2 * $n;
        print "<p>UUUUUUUUUUUUUU $resul</p>";
    }
?>