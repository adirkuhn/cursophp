<?php

session_start();

//processo login

$_SESSION['comida'] = 'batata';
$_SESSION['user_id'] = 8919;
$_SESSION['login'] = 'adirkuhn';

if ( !isset($_SESSION['data_criacao']) ) {
    $_SESSION['data_criacao'] = date('d/m/Y H:i:s');
}

$_SESSION['ultimo_acesso'] = date('d/m/Y H:i:s');



?>
<hr>

<h1> Sessao 1 </h1>

<a href='sessao2.php'>Ir para sessao 2</a>