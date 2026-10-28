<?php
    echo 'Questão 1: <br>';

    $tentativa=0;

    do{
        $dado=rand(1,6);
        $tentativa++;
    } while ($dado!=6);
    echo "Tentativas: ".$tentativa;
    echo "<br>";
/////////////////////////////////////////////////

    echo 'Questão 2: <br>';

    $secreto = 24;
    $tentativa1=0;

    do{
        $resultado=rand(1,100);
        echo "Resultado: $resultado <br>";
        $tentativa1++;
    } while ($secreto!=$resultado);
    echo "Tentativas: ".$tentativa1;
    echo "<br>";

?>