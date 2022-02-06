<?php
    $nome = 'Victor';
    echo 'Meu nome é ' .$nome . '<br>';

    $Victor = 'blá blá blá';
    $idade = '19';
    
    //Variável de uma variável
    echo 'Meu nome na verdade é ' .$$nome;

    if($nome == 'Victor'){
        echo '<br>True';
    }else{
        echo '<br>False';
    }

    if ($idade === 19) {
        echo '<br>True';
    }else{
        echo '<br>False<br><br>';
    }

    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo '<hr>';
    }

    class Pessoa{
        private $nome;
        private $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printPessoa(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }
    }

    $pessoa = new Pessoa('Carlos', '22');
    //echo $pessoa->nome;
    //echo $pessoa->idade;
    $pessoa->printPessoa();

?>