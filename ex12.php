<?php
//calculo fatorial com for
function fatorial($numero) {
    if ( is_int($numero) && $numero > -1 ) {

        $resultado = 1;
        for ($c=1; $c <= $numero ; $c++) {
            $resultado = $resultado * $c;
        }

        return $resultado;
    }
    else {
        echo "Erro, esperado um numero inteiro 0 ou positivo";
    }
}

echo fatorial(5);
echo '<br>';
echo fatorial(4);
echo '<br>';
echo fatorial(10);
echo '<br>';
echo fatorial(-12); //120
?>