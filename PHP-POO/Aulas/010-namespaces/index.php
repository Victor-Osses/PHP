<?php

//Tenho dois arquivos que contém uma classe com o mesmo nome, mas implementações diferentes
//Para evitar conflitos, é só utilizar namespaces

require 'classes/produto.php';
require 'models/produto.php';

//Especificando o namespace
$produto = new \classes\Produto();

$produto->mostrarDetalhes();
echo "<br>";

//Especificando a namespace e definindo um apelido
use \models\Produto as productModel;
use \classes\Produto as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();

echo "<br>";

$produto2 = new productClass();
$produto2->mostrarDetalhes();