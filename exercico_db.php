<?php
/**
 * Conexao com mysql
 * inserir um registro
 * consultar um registro
 * atualizar
 * apagar um registro
 **/

$db = new mysqli('localhost', 'root', '123abc', 'cursophp');

//verifica se houve algum erro na conexao com db
if ($db->connect_errno) {
    echo 'Erro ao conectar com banco de dados: ' . 
        $db->connect_error;
    die();
}

//inserir um registro
$resultado = $db->real_query("INSERT INTO cidades(nome) VALUES('Marechal')");

var_dump($resultado);

?>
<hr>
<?php

//consulta um registro
$consulta = $db->query("SELECT * FROM cidades WHERE id=5");
while($resultado = $consulta->fetch_object()) {
    echo $resultado->id;
    echo '<br>';
    echo $resultado->nome;
}
?>
<hr>
<?php

//atualizar
$consulta = $db->query("UPDATE cidades SET nome='Nova cidade' WHERE id=5");
var_dump($consulta);

?>
<hr>
<?php

//remover/deletar
$consulta = $db->query("DELETE FROM cidades WHERE id=5");
var_dump($consulta);

?>