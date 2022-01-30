<?php
// Expressões regulares
// Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras.
// ^ inicio da expressão, $ final da expressão, /i - case sensitive
// [] conjunto de caracteres
// {} ocorrências -?{0,1} *{0,} +{1,};
// /^[a-z0-9]. \-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

/*
[A-Z]: Letras maiúsuculas
[a-z]: Letras minúsuculas
[A-Za-z]: Letras maiúscula e minúsculas
[A-Za-z0-9]: Letras e números
*/

$string = "abc123";

//Se a expressão está iniciando com a letra "a": válido!
$padrao = "/^a/"; //Válido para strings que começam com o caractere "a"
$padrao = "/^ab/"; //Válido para string que começam com a string "ab";
$padrao = "/^a$/"; //Válido para a string "a"
$padrao = "/^abc$/";//Válido para a string "abc"
$padrao = "/^[a-z]$/";//Válido para caracteres de a até z;
$padrao = "/^[a-z0-9]$/"; //Válido para um caractere do alfabeto ou um número de 0 até 9
$padrao = "/^[a-z0-9]$/i"; //Válido para um caractere do alfabeto (maiúsculo ou minúsuculo) ou um número de 0 até 9
$padrao = "/^[a-z0-9]{1,4}$/i"; /*Válido de uma até quatro ocorrências de caracteres do alfabeto 
(maiúsculo ou minúsuculo) ou de números de 0 até 9*/
$padrao = "/^[a-z0-9]{6}$/i"; /*Válido para até 6 ocorrências de caracteres do alfabeto 
(maiúsculo ou minúsuculo) ou de números de 0 até 9*/
$padrao = "/^[a-z0-9]?$/i"; //Válido para 0 ou 1 ocorrência de um caractere do alfabeto (maiúsculo ou minúsuculo) ou um número de 0 até 9
$padrao = "/^[a-z0-9]*$/i"; //Válido para 0 ou muitas ocorrências
$padrao = "/^[a-z0-9]+$/i"; //Válido para 1 ou muitas ocorrências. Só é inválido para strings vazias

//Aplica a expressão regular e retorna um bool se a string estiver dentro do padrão informado
/*if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;
*/

// EXEMPLO COM PADRÃO PARA VALIDAR EMAIL
$string = "contato@gmail.com";

$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";
// ".\-\_" : A barra invertida é utilizada para separar os diferentes caracteres que podem aparecer no email

/*
INTERPRETAÇÃO

[a-z0-9.\-\_] - Tipos de caracteres válidos
+ - Quantidade de ocorrência
@ - arroba ao final
\ - para dar escape ao .
(com|br|com.br) - string permitidas depois do .
*/

/*if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;*/

$string = "13/12/2020";
$padrao = "/^[0-9]{2}\/[0-1]{1}[0-9]{1}\/[0-9]{4}$/";

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;
