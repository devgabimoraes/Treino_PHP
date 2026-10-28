<?php
    echo 'Questão 1: <br>';

    $num=5;
    $fatorial = 1;

    for ($i=1; $i<=$num; $i++) {
    $fatorial*=$i;
    }
    echo "O Fatorial de $num é: $fatorial <br>";

    echo "<br>";
    ////////////////////////////////////////////////

    echo 'Questão 2: <br>';

    $num1=50;

    for ($i=50; $i>=0; $i-=5) {
        echo "$i <br>";
    }
    echo "<br>";
    ////////////////////////////////////////////////

    echo 'Questão 3: <br>';

    $soma=0;

    for ($i=1; $i<=100; $i++) {
        if ($i%3==0) {
            $soma+=$i;
        }
    }
    echo "A soma total é: $soma <br>";
    echo "<br>";
    ////////////////////////////////////////////////

    echo 'Questão 4: <br>';

    $anterior=0;
    $atual=1;
    $temp=0;
    $soma=0;

    echo "$anterior, $atual";
    for ($i=0; $i<=15; $i++){
        $temp=$atual+$anterior;
        echo ", $temp";
        $anterior=$atual;
        $atual=$temp;
        }
    
?>