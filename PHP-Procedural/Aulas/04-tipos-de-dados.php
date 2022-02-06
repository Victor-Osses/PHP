<?php

//Dados escalares

$texto = "Olá, mundo";

//Exibe informações da variável
var_dump($texto);

// ********** STRING **********
if(is_string($texto)):
    echo "<br>É uma string<br>";
else:
    echo "<br>Não é uma string<br>";
endif;
echo "<hr>";

// ********** INTEGER **********
$num = 123;
var_dump($num);

if(is_integer($num)):
    echo "<br>É um inteiro<br>";
else:
    echo "<br>Não é inteiro<br>";
endif;
echo "<hr>";

// ********** FLOAT **********
$ponto_flutuante = 1.35;
var_dump($ponto_flutuante);

if(is_float($ponto_flutuante)):
    echo "<br>É um float<br>";
else:
    echo "<br>Não é float<br>";
endif;
echo "<hr>";

// ********** BOOL **********
$boolean = true;
var_dump($boolean);

if(is_bool($boolean)):
    echo "<br>É um booleano<br>";
else:
    echo "<br>Não é booleano<br>";
endif;
echo "<hr>";

// ********** ARRAY **********
$dados = array("Gol", 1, 20.5, true);
var_dump($dados);
echo "<br>";

foreach($dados as $dado){
    echo $dado . "<br>";
}

if(is_array($dados)):
    echo "<br>É um array<br>";
else:
    echo "<br>Não é array<br>";
endif;
echo "<hr>";

// ********** OBJECT **********
class Cliente{
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function atribuirNome($nome){
        $this->nome = $nome;
    }
}

$cliente = new Cliente("Carlos");
var_dump($cliente);
echo '<br>';
$cliente->atribuirNome("Victor");
var_dump($cliente);

if(is_object($cliente)):
    echo "<br>É um objeto<br>";
else:
    echo "<br>Não é objeto<br>";
endif;
echo "<hr>";

// ********** ESPECIAL **********
$cidade = NULL;
var_dump($cidade);

if(is_null($cidade)):
    echo "<br>É nullo<br>";
else:
    echo "<br>Não é nullo<br>";
endif;