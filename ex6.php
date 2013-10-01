<?php 

$contador = 1;

while ($contador < 10) {
    echo 'abc ';
    $contador++;
}

echo '<hr>';

$contador = 1;

do {
    echo 'xyz ';
    $contador++;
} while ($contador < 10);

echo '<hr>';

for($contador = 1; $contador < 10; $contador++) {
    echo $contador . ' ';
}

echo '<hr>';

$contador = 1;
for($alpha = 'A'; $alpha < 'G'; $alpha++) {
    echo $contador . ". Item " . $alpha;
    echo '<br>';
    $contador++;
}

echo '<hr>';

echo '<ol>';
for($alpha = 'A'; $alpha < 'G'; $alpha++) {
    echo "<li>";
    echo " Item " . $alpha;
    echo "</li>";
}
echo '</ol>';

?>