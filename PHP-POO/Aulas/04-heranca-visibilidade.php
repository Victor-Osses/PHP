<?php

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;
    protected $teste;

    public function Parar(){
        echo "Parou<br>";
    }

    private function SeiLa(){
        echo "Só pode ser chamada dentro da classe Veiculo";
    }

    //Métodos com visibilidade protected só podem ser invocados dentro do escopo das classes que herdam da classe pai
    protected function Andar(){
        echo "Andou<br>";
    }

    public function setTeste($teste){
        $this->teste = $teste;
    }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 3...2...1";
    }

    public function mover(){
        $this->Andar();
    }
}

class Moto extends Veiculo{ 
    public function darGrau(){
        echo "Dando grau em 3...2...1";
    }

    public function mover(){
        $this->Andar();
    }
}

$carro = new Carro();

$carro->modelo="Gol";
$carro->cor="Vermelho";
$carro->setTeste(2);
echo "<pre>"; echo var_dump($carro); echo "</pre>";
$carro->mover();
$carro->Parar();
$carro->ligarLimpador();
echo "<hr>";

$moto = new Moto();

$moto->modelo="Corsa";
$moto->cor="Azul";
$moto->ano=2021;
echo "<pre>"; echo var_dump($moto); echo "</pre>";
$moto->mover();
$moto->Parar();
$moto->darGrau();
echo "<hr>";

