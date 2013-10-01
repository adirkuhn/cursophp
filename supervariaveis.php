<?php

function p_array($arr) {
    echo '<pre>';
    echo print_r($arr);
    echo '</pre>';
}

$nome = 'Marcelo';
$arr = array('banana', 'maca', 'uva');

//$GLOBALS (todas as variaveis do escopo GLOBAL ;) )
p_array($GLOBALS);

//para imprimir a variavel temos duas formas
//forma tradicional
echo $nome;
//ou atraves da varial $GLOBALS['chave']
echo $GLOBALS['nome'];

?>
<hr>
<?php
//$_SERVER infomacoes do servidor
p_array($_SERVER);
?>