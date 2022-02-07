<?php

namespace App\Model;

class Conexao {

    private static $instance;

    // Verifica se já existe uma instância da conexão 
    // Padrão singleton: Só existe uma instância de conexão na aplicação e isso há torna mais rapida
    public static function getConn() {

        if(!isset(self::$instance)):
            // \PDO: A barra invertida é para indicar que a classe PDO é nativa do PHP
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        endif;
        
        return self::$instance;
    }
}