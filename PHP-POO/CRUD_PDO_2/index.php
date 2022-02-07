<?php

/*
    O arquivo autoload.php faz o carregamento automaticamnete das classes do projeto na memória. 
    Objetos só podem ser criados se suas respectivas classes estiverem carregadas na memória
    Agora não é necessário ficar dando require em todas as classes que eu for usar
*/

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome('Camiseta foda');
$produto->setDescricao('Ela é cara');
$produto->setId(2);

$produtoDao = new \App\Model\ProdutoDao();

//$produtoDao->create($produto);

$produtoDao->update($produto);

$produtoDao->delete($produto->getId());

echo "<pre>"; print_r($produtoDao->read()); echo "</pre>"; 




