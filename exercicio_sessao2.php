<?php
/* criar uma sessao e exiba:
 *
 * - id da sessao
 * - ultimo acesso
 * - data de criacao
 * - numero de vistas anteriores
 **/

//inicia a sessao
session_start();

if (!isset($_SESSION['dt_cricao'])) {
    $_SESSION['dt_cricao'] = date('d/m/Y H:i:s');
}

$_SESSION['dt_ult_acesso'] = date('d/m/Y H:i:s');

//verifica se ja existe a variavel
if (!isset($_SESSION['num_visitas_anteriores'])) {
    //nao existe, cria a var e atribui 1
    $_SESSION['num_visitas_anteriores'] = 1;
}
else {
    //ja existe, incrementa em 1
    $_SESSION['num_visitas_anteriores']++;
}

?>
<table border="1">
    <tr>
        <td>ID da sessao</td>
        <td><?php echo session_id(); ?></td>
    </tr>
    <tr>
        <td>Data Criacao</td>
        <td><?php echo $_SESSION['dt_cricao']; ?></td>
    </tr>
    <tr>
        <td>Dt. Ultimo Acesso</td>
        <td><?php echo $_SESSION['dt_ult_acesso']; ?></td>
    </tr>
    <tr>
        <td>Visitas anteriores</td>
        <td><?php echo $_SESSION['num_visitas_anteriores']; ?></td>
    </tr>
</table>