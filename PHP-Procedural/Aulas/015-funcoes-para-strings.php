<?php
/*Funções para strings:
strtoupper - Retorna a string em caracteres maiúsculos
strtolower - Retorna a string em caracteres minúsculos
substr - Retorna parte de uma string
str_pad - Completa uma string com X caracteres
str_repeat - Recebe uma string e o número de vezes que ela deve se repetir
strlen - Retorna o tamanho de uma string
str_replace - Retorna uma string com um texto trocado por outro
strpos - Retorna a posição em que inicia um certo texto
*/

$string = "Victor Osses";
$string = strtoupper($string);
echo "<b>strtoupper(string)</b> - $string <hr>";

$string = "AAAAAAAAAA";
$string = strtolower($string);
echo "<b>strtoupper(string)</b> - $string <hr>";

$string = "Olá, mundo";
//$string, inicio (int), $ler X caracteres (int)
echo "<b>substr(string, inicio, ler X caracteres)</b> - " . substr($string, 4) . '<hr>';

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "?", STR_PAD_LEFT);
echo '<b>str_pad($string, quantidade de caracteres que a string deve ter, caracter que vai completar o tamanho da string,)</b> - '. $novoObjeto . '<hr>';

$string = str_repeat("Sucesso!", 5);
echo '<b>str_pad($string, int) </b>- ' . $string . '<hr>';

echo '<b>strlen($string) -</b> ' . strlen($string) . '<hr>';

$string = "A seleção da Argentina foi eliminada pelo Brasil";
echo '<b>str_replace(texto a ser substituido, substituição, $string) - </b> ' . str_replace(" ", " / ", $string) . '<hr>';

echo '<b>strpos($string, "string")</b> - ' . strpos($string, "Brasil") . '<hr>';