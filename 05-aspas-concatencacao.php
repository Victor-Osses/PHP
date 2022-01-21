<?php
$nome = 'Victor Osses';

//Tudo dentro de aspas simples é considerado texto
echo 'Meu nome é $nome<br>';
echo 'Meu nome é ' . $nome . '<br>';

//Bara invertida escapa elementos
echo 'Meu nome  ' . $nome .  ' e minha idade é \'23\'<br>';

//Tudo dentro de aspas duplas é interpretativo
echo "Meu nome é $nome <br>";
echo "Meu nome é \"$nome\"";