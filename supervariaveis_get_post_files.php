<?php
function p_array($arr) {
    echo '<pre>';
    echo print_r($arr);
    echo '</pre>';
}

if ($_GET) {
    if (isset($_GET['nome'])) {
        //salvar usuario
        echo $_GET['nome'];        
        echo '<br>';
        echo $_GET['idade'];
    }
    else {
        echo 'Requerido chave nome';
    }
}

if ($_POST) {
    if (isset($_POST['nome'])) {
        //salvar usuario
        echo $_POST['nome'];
        echo '<br>';
        echo $_POST['idade'];
    }
    else {
        echo 'Requerido chave nome';
    }
}

if ($_FILES) {
    p_array($_FILES);
}

echo '<br>';
echo '<hr>';
echo '$_REQUEST';
p_array($_REQUEST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teste</title>
</head>
<body>
    <h2> Exemplo form GET </h2>
    <form name="form_get" method="GET">
        Nome: <input name="nome" type="text" /><br/>
        Idade: <input name="idade" type="text" /><br/>
        <input type="submit" value="Enviar" />
    </form>

<hr/>

    <h2> Exemplo form POST </h2>
    <form name="form_post" method="POST">
        Nome: <input name="nome" type="text" /><br/>
        Idade: <input name="idade" type="text" /><br/>
        <input type="submit" value="Enviar" />
    </form>

<hr/>

    <h2> Exemplo form POST </h2>
    <form enctype="multipart/form-data" name="form_post_file" method="POST">
        Nome: <input name="nome" type="text" /><br/>
        Idade: <input name="idade" type="text" /><br/>
        Arquivo: <input name="arquivo" type="file" />
        <input type="submit" value="Enviar" />
    </form>

</body>
</html>