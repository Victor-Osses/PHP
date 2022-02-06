<?php

//Funções paa números

/*
    number_format(number, decimals, dec_point, thousands_sep) - Formata aplicando a quantidade de casas decimais e os separadores dos decimais e dos milhares
    round($number, x) - Arredonda para o mais próxima com X casas decimais
    ceil($number) - Arredonda para cima
    floor($number) - Arredonda para baixo
    rand($min, $max) - Gera um valor numérico dentro do intervalor informado
*/

$db = 123234.56;
$preco = number_format($db, 2, ",", "."); //123.324,56
echo "<b>number_format(number, decimals, dec_point, thousands_sep) - </b>R$ $preco</b><hr>";

echo '<b>round($number,decimals) -</b> ' . round(3.143232, 1) . '<hr>'; 

echo '<b>ceil($number) -</b> ' . ceil(3.143232) . '<hr>'; 

echo '<b>floor($number) -</b> ' . floor(3.143232) . '<hr>'; 

srand();
echo '<b>rand($min, $max) -</b> ' . rand(1, 10) . '<hr>';



