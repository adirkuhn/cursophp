<?php
//calculo fatorial com funcao recursiva

function fatorial ($numero) {
    //verifica se o numero é inteiro e igual ou maior que 0
    if ( is_int($numero) && $numero >= 0 ) {

        if ($numero == 0) {
            return 1;
        }
        else {
            //calcula fatorial com recursividade
            return $numero * fatorial($numero - 1);
        }

    }
    else {
        echo 'Erro, esperado numero inteiro maior ou igual a 0';
    }
}

echo fatorial(0); //1
echo '<br>';
echo fatorial(5); //120
echo '<br>';
echo fatorial(-10); //erro
?>