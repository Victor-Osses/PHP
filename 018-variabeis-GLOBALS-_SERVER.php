<?php

//Superglobais

/*
    $GLOBALS - Armazena todas as variáveis globais em um array associativo
    $_SERVER - Array que contém vários índices 
    $_POST - Array que contém informações enviadas via formulário POST
    $_GET - Array que contém informações enviadas via formulário GET
    $_FILES - Array que contém informações de arquivos enviados
    $_COOKIE - 
    $_SESSION - Array que armazena informações e permite manipula-las entre páginas
*/

$x = 10;
$y = 20;

function soma(){
    //Por meio da variável $GLOBALS é possível acessar qualquer variável global
    echo '<b>$GLOBALS</b> - ' . $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo '<hr>';

//Retorna o caminho do arquivo
echo '<b>$_SERVER</b> - ' . $_SERVER['PHP_SELF'] . '<br>' ;
echo '<b>$_SERVER</b> - ' . $_SERVER['SERVER_NAME'] . '<br>';
echo '<b>$_SERVER</b> - ' . $_SERVER['SCRIPT_FILENAME'] . '<br>';
echo '<b>$_SERVER</b> - ' . $_SERVER['DOCUMENT_ROOT'] . '<br>' ;
echo '<b>$_SERVER</b> - ' . $_SERVER['SERVER_PORT'] . '<br>' ;
echo '<b>$_SERVER</b> - ' . $_SERVER['REMOTE_ADDR'] . '<br>' ;

