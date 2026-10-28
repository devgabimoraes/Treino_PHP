<?php
    
    // for (inicialização; condição; incremento/decremento) {
    // o que vai acontecer a cada volta

    for ($i=0; $i<10; $i++) {
    echo "contador: $i<br>";
    }
    echo"<br>";
    echo"<br>";
    
    $cores = array ("azul", "amarelo", "vermelho", "verde");

    foreach ($cores as $cor) {
        echo "Cor: $cor <br>";
    }

echo"<br>";

function multiplica($a, $b, $c) {
    $retorno=$a*$b*$c;
    return $retorno;
}

echo multiplica (2,4,3);
echo "<br>";
echo multiplica (8,3,7);

echo"<br>";
echo"<br>";
function potencia($base, $exp) {
    $resultado=1;
    for ($i=1; $i<=$exp; $i++) {
        $resultado *= $base;
    }
    return $resultado;
    }
    $a=2;
    $b=3;
    $teste= potencia($a,$b);

    echo "Com base de $a e expoente $b o resultado é $teste";

    echo"<br>";
    echo"<br>";

    function maiornome($nome1, $nome2) {
        if(strlen($nome1)> strlen($nome2)) {
            return $nome1;
        }
        elseif(strlen($nome2)>strlen($nome1)) {
            return $nome2;
        }
        else {
            return "Os nomes tem o mesmo tamanho";
        }
    }

    $c="Alexandre";
    $d="Beatriz";

    $teste=maiornome($c, $d);

    echo "Entre $c e $d o maior nome em letras é $teste";

    echo"<br>";
    echo"<br>";

    //Criar função que receba um array de nros (0,1,2,3,4,5,6,7,8,9) e imprima apenas os pares

    function par ($arraynumeros) {
        echo "Numeros pares do array <br>";

        foreach($arraynumeros as $numero) {
            if(($numero%2==0)&&($numero!=0)) {
                echo "$numero <br>";
            }
        }
    }
    $numeros=[0,1,2,3,4,5,6,7,8,9];
    par($numeros);

echo"<br>";
    echo"<br>";

$string = 'O rato roeu a rolha do rei de Roma';

echo "<br>";

$codificada = base64_encode($string);

echo "Resultado da codificação usando base64: " . $codificada;
// TyByYXRvIHJvZXUgYSByb2xoYSBkbyByZWkgZGUgUm9tYQ==

echo "<br>";

$original = base64_decode($codificada);

echo "Resultado da decodificação usando base64: " . $original;
// O rato roeu a rolha do rei de Roma

// Note que $original vai ser idêntica a $string
?>