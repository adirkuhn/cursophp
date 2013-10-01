<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1">
    <?php
    for($linhas=1; $linhas <= 7; $linhas++) {
        echo '<tr>';
            for($colunas=1; $colunas <= 7; $colunas++) {
                echo '<td>' . ( $linhas * $colunas ) . '</td>';
            }
        echo '</tr>';
    }
    ?>  
</table>
</body>
</html>