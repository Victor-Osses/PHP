<?php

//A classe Banco só serve de modelo para as demais classes, ela não é instanciada e, por isso, é abstrata
abstract class Banco{
    protected $saldo;
    protected $limSaque;
    protected $juros;

    //Obriga as classes que herdam de Banco a possuírem esses métodos com o mesmo nome, visibilidade e assinatura
    abstract public function Sacar($s);
    abstract public function Depositar($d);

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo ;
    }
}

class Itau extends Banco{
    public function Sacar($s){
        $this->saldo -= $s; 
        echo "<hr>Sacou: $s";
    }

    public function Depositar($d){
        $this->saldo += $d; 
        echo "<hr>Depositou: $d";
    }
}

class Bradesco extends Banco{
    public function Sacar($s){
        $this->saldo -= $s; 
    }

    public function Depositar($d){
        $this->saldo += $d; 
    }
}

//$banco = new Banco(); Não permitido!
$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Sacar(100);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: " . $itau->getSaldo();