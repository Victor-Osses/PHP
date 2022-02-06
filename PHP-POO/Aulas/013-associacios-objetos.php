<?php

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Victor";
$cliente->endereco = "vi@gmail.com";

$pedido = new Pedido();
$pedido->numero = 13;

$pedido->cliente = $cliente;

$dados = array(

    'numero' => $pedido->numero,
    'nome' => $pedido->cliente->nome,
    'endereco' => $pedido->cliente->endereco

);


echo "<pre>"; print_r($dados); echo "</pre>"; exit;