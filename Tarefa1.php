<?php
    echo 'Questão 1: <br>';
    
    $lado = 5;
    $perimetro = $lado*4;
    $area = $lado*$lado;
    echo 'Se um quadrado tem '.$lado.' cm de lado';
    echo "<br>";
    echo 'O perímetro desse quadrado é '.$perimetro.' cm';
    echo "<br>";
    echo 'A área desse quadrado é '.$area.' cm2';
    echo "<br>";
    echo "<br>";
    
    echo 'Questão 2: <br>';

    $base = 5;
    $altura = 4;
    $perimetro = 2*($base+$altura);
    $area = $base*$altura;
    echo 'Se um retângulo tem '.$base.' cm de base e '.$altura.' cm de altura';
    echo "<br>";
    echo 'O perímetro desse retângulo é '.$perimetro.' cm';
    echo "<br>";
    echo 'A área desse retângulo é '.$area.' cm2';
    echo "<br>";
    echo "<br>";

    echo 'Questão 3: <br>';

    $metro = 5;
    $decimetro = $metro * 10;
    $centimetro = $metro * 100;
    $milimetro = $metro * 1000;
    echo 'Metro: '.$metro;
    echo "<br>";
    echo 'Equivale a '.$decimetro.' decímetros, '.$centimetro. ' centímetros e '.$milimetro.' milímetros.';
    echo "<br>";
    echo "<br>";

    echo 'Questão 4: <br>';

    $num1 = 8;
    $num2 = $num1 * 2;
    $num3 = $num1 * 3;
    $num4 = $num1 * 4;
    $num5 = $num1 * 5;
    $num6 = $num1 * 6;
    $num7= $num1 * 7;
    $num8 = $num1 * 8;
    $num9 = $num1 * 9;
    $num10 = $num1 * 10;
    
    echo 'TABUADA DO '.$num1.'<br>';
    echo "<br>";
    echo $num1.' X 1 = '.$num1.'<br>';
    echo $num1.' X 2= '.$num2.'<br>';
    echo $num1.' X 3 = '.$num3.'<br>';
    echo $num1.' X 4 = '.$num4.'<br>';
    echo $num1.' X 5 = '.$num5.'<br>';
    echo $num1.' X 6 = '.$num6.'<br>';
    echo $num1.' X 7 = '.$num7.'<br>';
    echo $num1.' X 8 = '.$num8.'<br>';
    echo $num1.' X 9 = '.$num9.'<br>';
    echo $num1.' X 10 = '.$num10.'<br>';
?>