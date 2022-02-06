<?php

// clone
// construct
// invoke
// tostring
// public function __get($atributo)
// public function __set($atributo, "valor")

class Pessoa{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring(){
        return 'Tentei imprimir o objeto utiliando o método especial __tostring';
    }

    public function __invoke(){
        return 'Objeto como função - $pessoa()'; //Ao tentar dar um echo em um objeto instanciado como se fosse uma função
    }
}

// Não importa se o atributo é public, private ou protected, uma vez que as funções especiais __get e __set
// são públicas

$pessoa = new Pessoa();
$pessoa->__set('nome', 'Danilo');
$pessoa->idade = 40;
$pessoa->sexo = "M"; 

echo $pessoa->__get('nome') . "<br>";
echo $pessoa->idade . "<br>";
echo $pessoa->sexo . "<hr>";

echo $pessoa . "<hr>";
echo $pessoa();


