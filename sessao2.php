<?php
session_start();



?>
<h1>Sessao 2</h1>
<a href='sessao.php'>Ir para sessao 1</a>

<marquee><h2>Dados do usuario</h2></marquee>
<table border="1">
    <tr>
        <td>ID da sessao</td>
        <td><?php echo session_id(); ?></td>
    </tr>
    <tr>
        <td>Comida</td>
        <td><?php echo $_SESSION['comida']; ?></td>
    </tr>
    <tr>
        <td>Id do usuario</td>
        <td><?php echo $_SESSION['user_id']; ?></td>
    </tr>
    <tr>
        <td>Login do usuario</td>
        <td><?php echo $_SESSION['login']; ?></td>
    </tr>
    <tr>
        <td>Data de criacao</td>
        <td><?php echo $_SESSION['data_criacao']; ?></td>
    </tr>
    <tr>
        <td>Ultimo acesso</td>
        <td><?php echo $_SESSION['ultimo_acesso']; ?></td>
    </tr>
</table>