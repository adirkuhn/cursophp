<?php

$string = 'abc';

$procurar = 'banana';

$pos = strpos($string, $procurar);

if( $pos === false ) {
    echo 'Nao encontrou';
}
else {
    echo 'encontrada na posicao: ' .$pos;
}
?>