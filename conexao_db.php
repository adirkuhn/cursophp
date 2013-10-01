<?php

$db = new mysqli('localhost', 'root', '123abc', 'cursophp');

//verifica se houve algum erro na conexao com db
if ($db->connect_errno) {
    echo 'Erro ao conectar com banco de dados: ' . 
        $db->connect_error;
    die();
}

$consulta = $db->query("SELECT * FROM cidades");

while($resultado = $consulta->fetch_assoc()) {
    print_r($resultado);
}

echo 'conexao estabelecida';
echo '<pre>';
var_dump($consulta);
echo '</pre>';
?>