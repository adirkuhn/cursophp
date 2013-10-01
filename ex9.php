<?php
function ola() {
    echo 'Ola Mundo';
}

ola();

echo '<hr>';

function ola2($nome = 'Fulano') {
    echo 'Ola ' . $nome;
}

ola2('Maria!!!!');

?>