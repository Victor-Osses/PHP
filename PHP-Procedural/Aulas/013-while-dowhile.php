<?php

$contador = 1;

while($contador <= 10):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

$contador = 1;
echo '<hr>';

do {
    echo "Contador é $contador <br>";
    $contador++;
} while($contador <= 10);