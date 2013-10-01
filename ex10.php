<?php
//calcula area de um retangulo
// e imprime uma mensagem na tela

function calc_retangulo($h, $l) {

    if ( is_int($h) && is_int($l)) {
        $area = $h * $l;
        echo "Para um retangulo com altura $h e largura $l a area eh $area";
    }
    else {
        echo 'Parametros invalidos';
    }
}

//calc_retangulo(10, 'hue hue hue br');
calc_retangulo(10, 7);


?>