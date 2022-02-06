<?php

namespace App\Entity;

//Dependência
use \App\Db\Database;
use \PDO;

class Vaga{
    
    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    
    /**
     * Título da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $descricao;


    /**
     * Define se a vaga está ativa
     *  @var string(s/n)
    */    
    public $ativo;


    /**
     * Data de publicação da vaga
     *  @var string
    */  
    public $data;


    /**
     * Método responsável por cadastrar a nova vaga no banco
     * @return boolean
     */
    public function cadastrar(){
        //Definir data
        $this->data = date('Y-m-d H:i:s');

        //Inserir a vaga no banco
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);

        return true;
    }

    /**
     * Método responsável por atualizar uma vaga no banco
     * @return boolean
     */
    public function atualizar(){
        return (new Database('vagas'))->update('id = '.$this->id, ['titulo' => $this->titulo,
                                                                  'descricao' => $this->descricao,
                                                                  'ativo' => $this->ativo,
                                                                  'data' => $this->data]);
    }

    public function excluir(){
        return (new Database('vagas'))->delete('id = '.$this->id);
    }

    /** 
     * Método responsável por obter as vagas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
    */
    public static function getVagas($where = null, $order = null, $limit = null){
        //FetchAll -> Transformar o retorno em um array. Array de que tipo?
        //FETCH_CLASS -> Tipo do array de classe 
        //self::class -> Array de objetos da classe Vagas.
        return (new Database('vagas'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por buscar uma vaga com base em seu ID
     * @param integer $id
     * @return Vaga
     */
    public static function getVaga($id){
        return (new Database('vagas'))->select('id =' . $id)->fetchObject(self::class);
    }
}