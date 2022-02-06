<?php

/*
* is_array($array) = verifica se uma determina variável é um array
* in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
* array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
* array_values($array) = retorna um novo array com os valores do array passado como parâmetro
* array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
* array_pop($array) = excluí a última posição do array
* array_shift($array) = excluí a primeira posição do array 
* array_unshift($array, "valor") = adiciona um ou mais elementos no início do array
* array_push($array, "valor", "valor") = adiciona um ou mais elementos no final do array
* array_combine($keys, $values) = mescla os dois arrays passados
* array_sum($array) = calcula a soma dos elementos de um array
* explode("/", "20/01/2001") = transforma a string em um array a partir de um separador
* implode("-", $arr) = transforma um array em uma string com o separador informado
*/

$nome = ["Victor", "Hugo", "Costa"];

echo '<b>is_array($nome)</b> == '; 
echo (is_array($nome) == 1) ? 'true' : 'false'; 
echo '<hr>';

echo '<b>in_array($valor, $nome)</b> == ';
echo (in_array("Victor",$nome) == 1) ? 'true' : 'false';
echo '<hr>';

echo '<b>array_keys($array):</b> ';
$pessoa = array("Nome"=>"Victor", "Idade"=>19, "Altura"=>1.73);
$keys = array_keys($pessoa);
print_r($keys);
echo '<hr>';

echo '<b>array_values($array):</b> ';
$values = array_values($pessoa);
print_r($values);
echo '<hr>';

echo '<b>array_merge($array1, $array2):</b> ';
$array_merge = array_merge($nome, $pessoa);
print_r($array_merge);
echo '<hr>';

echo '<b>array_pop($array):</b> ';
array_pop($nome);
print_r($nome);
echo '<hr>';

echo '<b>array_shift($array):</b> ';
array_shift($nome);
print_r($nome);
echo '<hr>';

echo '<b>array_unshift($array, "value"):</b> ';
array_unshift($nome, "Costa", "Osses");
print_r($nome);
echo '<hr>';

echo '<b>array_push($array, "value"):</b> ';
array_push($nome, "Victor", "Sei lá");
print_r($nome);
echo '<hr>';

echo '<b>array_combine($keys, $values):</b> ';
$array_combine = array_combine(["Nome", "Idade", "Altura"], ["Victor", 19, 1.65]);
print_r($array_combine);
echo '<hr>';

$numbers = [1, 4, 7, 2, 5, 1.2, sqrt(4)];
echo '<b>array_sum($array):</b> ';
$soma = array_sum($numbers);
echo $soma . '<hr>';

echo '<b>explode("/", $array):</b> ';
$nome_completo = explode('/', "Victor,Hugo,Costa,Osses");
print_r($nome_completo); 
echo '<hr>';

echo '<b>implode("/", $array):</b> ';
$nome_completo2 = implode(' ', ["Victor", "Hugo", "Costa", "Osses"]);
echo ($nome_completo2). '<hr>';
