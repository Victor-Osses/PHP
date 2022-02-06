<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo "$this->nome falou que tem $this->idade anos";
    }
}

$victor = new Pessoa();
$victor-> nome = "Victor Osses";
$victor->idade = 19;
echo "<pre>"; var_dump($victor); echo "</pre>";

$victor->falar();