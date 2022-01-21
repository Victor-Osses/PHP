<?php
//Escopo global
$nome = "Victor Osses";
$a = 1;
$b = 3;
$c = 7;

//Escopo local dentro da função
function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;

function soma(){
    //GLOBALS é uma array que contém todas as variáveis
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

echo "<hr>";
soma();