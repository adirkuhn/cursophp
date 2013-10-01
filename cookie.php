<?php

$login = 'j.silva';
$idade = 31;
$tempo_expiracao = time()+360;

setcookie('login', $login, $tempo_expiracao);
setcookie('idade', $idade, $tempo_expiracao);

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
?>