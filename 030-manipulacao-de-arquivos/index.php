<?php
/*
fopen()
fclose()
fwrite()
!feof
fgets
filesize
*/

$arquivo = 'texto.txt';

// "\r" para pular linhas
$conteudo = "Conteudo de teste\r\r";

$file = fopen($arquivo, "r");

/*
ESCRITA
$file = fopen("texto.txt", "a");
//fwrite($file, $conteudo);
*/

while(!feof($file)):
    //filesize($arquivo)) -> tamanho limite
    $linha = fgets($file, filesize($arquivo));
    echo $linha . "<br>";
endwhile;

fclose($file);


