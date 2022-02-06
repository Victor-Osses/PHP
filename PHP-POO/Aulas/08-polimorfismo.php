<?php

class Animal{
    public function Andar(){
        echo "<hr>O animal andou!";
    }

    public function Correr(){
        echo "<hr>O animal correu!";
    }
}

class Cavalo extends Animal{
    //Polimorfismo é basicamente sobrescrever um método herdado da classe pai
    public function Andar(){
        $this->Correr();
    }
}


$animal = new Cavalo();
$animal->Andar();