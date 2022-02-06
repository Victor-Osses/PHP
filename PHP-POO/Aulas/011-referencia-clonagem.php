<?php

class Pessoa{
    public $idade;

    public function __clone(){
        echo "Clonagem de objetos: ";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

//Para não fazer referência:
$pessoa2 = clone $pessoa;
$pessoa2->idade = 55;

echo $pessoa->idade . "<br>";//25

//O objeto pessoa2 agr faz referência ao objeto pessoa. É como se o endereço de memória deles fosse o mesmo agora
$pessoa2 = $pessoa;

$pessoa2->idade = 35;
echo $pessoa->idade . "<br>"; //35


