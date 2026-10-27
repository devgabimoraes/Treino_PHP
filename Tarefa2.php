<?php
    echo 'Questão 1: <br>';

    $num=5;
    $fatorial=1;
    while ($num>1){
        $fatorial*=$num;
        $num--;
    }
    echo $fatorial;
    echo "<br>";
/////////////////////////////////////////////////
    echo 'Questão 2: <br>';

    $num3=1;

    while ($num3<=100){
        if ($num3%2==1){
            echo $num3."<br>";
        }
        $num3++;
    }
    echo "<br>";
////////////////////////////////////////////////
    echo 'Questão 3: <br>';

    $num4=1;
    $soma=0;
    while ($num4<=100){
        $soma+=$num4;
        $num4++;
    }
    echo $soma;
    echo "<br>";
////////////////////////////////////////////////
    echo 'Questão 4: <br>';

    $num5=8;
    $contador=1;
    $resultado=0;

    while ($contador<=10){
        $resultado = $num5*$contador;
        echo $num5." x ".$contador." = ".$resultado."<br>";
        $contador++;
    }

?>