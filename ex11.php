<?php
//verifica se um numero informado é par

function eh_par($numero) {
    //verifica se o parametro é um numero inteiro
    if ( is_int($numero) ) {

        //verificar se o numero é par
        if ( ($numero % 2) === 0 ) {
            echo 'O numero eh par.';
        }
        else {
            echo 'O numero nao eh par.';
        }
    }
    else {
        echo "parametro invalido, esperado um numero inteiro";
    }
}

eh_par('oi');
?>