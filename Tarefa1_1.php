<?php
    echo 'Questão 5: <br>';
    
    $num = 5;

    if ($num%2 == 0) {
        echo 'O número '.$num.' é PAR! <br>';
    }
    else {
        echo 'O número '.$num.' é ÍMPAR! <br>';
    }
    echo "<br>";
    echo "<br>";
    ///////////////////////////////////////////////////////
    echo 'Questão 6: <br>';
    
    $num1 = 9;
    $num2 = 8;

    if ($num1>$num2) {
        echo 'O maior número é o '.$num1.' e a diferença entre ele e o '.$num2.' é '.$num1-$num2.'! <br>';
    }
    else {
        echo 'O maior número é o '.$num2.' e a diferença entre ele e o '.$num1.' é '.$num2-$num1.'! <br>';
    }
    echo "<br>";
    echo "<br>";
    /////////////////////////////////////////////////////
    echo 'Questão 7: <br>';
    
    $peso = 88.5;
    $altura = 1.70;
    $sexo = "F";

    if ($sexo == "F") {
        echo 'Seu peso é '.$peso.' e a altura '.$altura.'. Seu peso ideal é: '.($altura*62.1)-44.7.'! <br>';
    }
    else {
        echo 'Seu peso é '.$peso.' e a altura '.$altura.'. Seu peso ideal é: '.($altura*72.7)-58.0.'! <br>';
    }
    echo "<br>";
    echo "<br>";
    ////////////////////////////////////////////////////
    echo 'Questão 8: <br>';
    
    $valor1 = 5;
    $valor2 = 1;
    $valor3 = 15;
    $media = ($valor1+$valor2+$valor3)/3;
    $maiorValor = 0;
    $menorValor = 0;

    if ($valor1 > $valor2 AND $valor1 > $valor3) {
        $maiorValor = $valor1;
            if ($valor2 > $valor3) {
                $menorValor = $valor3;
            }
            else {
                $menorValor = $valor2;
            }
    }
    else if ($valor2 > $valor1 AND $valor2 > $valor3) {
        $maiorValor = $valor2;
            if ($valor1 > $valor3) {
                $menorValor = $valor3;
            }
            else {
                $menorValor = $valor1;
            }
    }
    else if ($valor3 > $valor1 AND $valor3 > $valor2) {
        $maiorValor = $valor3;
            if ($valor1 > $valor2) {
                $menorValor = $valor2;
            }
            else {
                $menorValor = $valor1;
            }
    }
    
    echo 'O maior valor é: '.$maiorValor.' e o menor valor é: '.$menorValor.' com a média de: '.$media;
    echo "<br>";
    echo "<br>";
?>