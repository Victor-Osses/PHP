<?php
//Agregação
//Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra
//como parte de si prórpria.

class Produtos{
    public $name;
    public $valor;

    function __construct($name, $valor){
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;

    // $produtos, obrigatóriamente, deve ser uma instância da classe Produtos. Isso é uma agregação
    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibir(){
        foreach($this->produtos as $produto){
            echo $produto->name . '<br>';
            echo $produto->valor . '<hr>';
        }        
    }
}

$produtos = new Produtos('Camiseta', 200);
$carrinho = new Carrinho();

//A classe produtos é colaboradora da classe Carrinho
$carrinho->adiciona($produtos);
$carrinho->exibir();

