<?php

//Uma interface é um modelo a ser usado por outras classes. É um contrato que define os métodos a serem implementados

interface Crud{
    //Interfaces não aceitam declarações de variáveis

    /*
    A limitação da interface em relação a se usar uma classe abstrata como extensão de outra classe é que nesse último caso você
    pode aproveitar tanto os atributos quanto os métodos. Por outro lado, na interface você só pode aproveitar os métodos. 
    */

    //Métodos que deverão ser implementados pelas classes que implementarem essa interface (modelo)
    //Os métodos da interface DEVEM ser públicos
    public function create($data); //Não preciso especificar a implementação
    public function read();
    public function update();
    public function delete();
}

//A classe Noticias é obrigada a implementar os métodos definidos na interface Crud
class Noticias implements Crud{
    public function create($data){
        //Lógica para criar uma noticia
    }

    public function read(){
        //Lógica para ler uma noticia
    }

    public function update(){
        //Lógica para atualizar uma noticia
    }

    public function delete(){
        //Lógica para deletar uma noticia
    }

}