<?php

for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = ". ($contador * 8) . "<br>";
endfor;

echo "<hr>";

$cores = array("Vermelho", "Verde", "Azul");

foreach($cores as $indice => $cor):
    echo "$indice - $cor <br>";
endforeach;