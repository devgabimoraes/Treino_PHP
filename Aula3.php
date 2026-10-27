<?php
    $num=6;
    if ($num%2==0){
        echo "O número ".$num." é PAR <br>";
    }else{
        echo "O número ".$num." é ÍMPAR <br>";
    }

    echo "<br>";

    $i = 2;
    switch ($i){
        case 0:
            echo "i é igual a 0";
            break;
        case 1:
            echo "i é igual a 1";
            break;
        default:
            echo "i é diferente de 0 e 1";
    }
?>