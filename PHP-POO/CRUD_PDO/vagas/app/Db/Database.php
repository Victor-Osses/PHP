<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database{

    /**
     *  Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'wdev_vagas';


    /**
     * Usuário do banco de dados
     * @var string
     */
    const USER = 'root';

    /**
     * Usuário do banco de dados
     * @var string
     */
    const PASS = '';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instância de conexão com o banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instância a conexão
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }


    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            
            //Configurando o PDO para lançar um Exception caso algo não saia como esperado
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: ' . $e->getMessage());
        }
    }


    /**
     * Método responsável por executar querys dentro do banco de dados
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query, $params = []){
        try {
            //Identificar os binds que devem ser substituídos com os valores
            $statement = $this->connection->prepare($query);
            //Substitui os parâmetros na query e a executa
            $statement->execute($params);

            //Em uma consulta, é no statement que vai ser retornada os valores da consulta
            return $statement;
        }catch(PDOException $e){
            die('ERROR: ' . $e->getMessage());
        }
    }

    /**
     * Método responsável por inserir dados no banco
     * @param array $values [field => value]
     * @return integer ID inserido
     */
    public function insert($values){
        //Dados da query
        $fields = array_keys($values);

        /*array_pad => Preciso que o array informado tenha X posições. Caso ele não tenha, crie até X posições e as preencha com o valor Y*/
        $binds = array_pad([], count($fields), '?');

        //VALUES (?,?,?,?) -> Previne SQL injection
        //A função implode() concatena todas os dados dentro do array com um separador
        $query = 'INSERT INTO '.$this->table. '('. implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';  

        //Executa o insert
        $this->execute($query, array_values($values));

        //Retorna o ID
        return $this->connection->lastInsertId();
    }

    /** 
     * Método responsável por obter as vagas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return PDOStatement
    */
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //Dados da query
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

        //Executa a Query
        return $this->execute($query);
    }

    /** 
     * Método responsável por executar atualizações no BD
     * @param string $where
     * @param array $values [field values]
     * @return boolean
    */
    public function update($where, $values){
        //Dados da Querys
        $fields = array_keys($values);

        //Monta Query
        $query = 'UPDATE '.$this->table.' SET '. implode('=?,', $fields).'=? WHERE '.$where; 

        //Executa a Query
        $this->execute($query, array_values($values));
        return true;
    }

    /** 
     * Método responsável por excluir dados do BD
     * @param string $where
     * @return boolean
    */
    public function delete($where){
        //Monta Query
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where; 

        //Executa a Query
        $this->execute($query);
        return true;
    }
}