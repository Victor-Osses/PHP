<?php

class Pessoa{
    const nome = "Victor Osses";

    public function exibirNome(){
        //Para referenciar uma constante, usa-se self::nomeConstante
        //Self faz referência a constante dentro do escopo desta classe
        echo "<hr>".self::nome;
    }
}

class Victor extends Pessoa{
    const nome = "Oliveira";

    public function exibirNome(){
        //Parent faz referência a constante dentro do escopo da classe pai
        echo "<hr>".parent::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

$novaPessoa = new Victor();
$novaPessoa->exibirNome();