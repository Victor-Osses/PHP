<?php

//Uma classe abstrata não pode ser instanciada. Classes abstratas estão no sistema somente como estrutura
abstract class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo} <br/>";
    }

    //Como é um método final, este não pode ser alterado nas classes descendentes.
    public final function depositar($valor){
        $this->saldo += $valor; 
        echo "Depósito de: {$valor} | Saldo atual: {$this->saldo} <br/>";
    }

    //Por ser abstract, todas as classes descendentes devem implementar esse método
    /*public abstract function exemplo(){
        echo 'Exemplo de método estrutural';
    }*/
}

//Herança; A classe Poupanca herda todos os atributos e métodos da classe Conta
//Para que uma classe não possa ser extendida: colocar final 
final class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo} <br/>";
        else:
            echo "Saque não autorizado | Saldo atual: {$this->saldo} <br/>";
        endif;
    }
}


//Herança; A classe Corrente herda todos os atributos e métodos da classe Conta
//Para que uma classe não possa ser extendida: colocar final 
final class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
        //Chama o construtor da classe pai (classe Conta) passando esse parâmetros para ela
        parent::__construct($agencia, $conta, $saldo); 
        $this->limite = $limite;
    }


    public function saque($valor){
        if(($this->saldo + $this->limite) >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo} <br/>";
        else:
            echo "Saque não autorizado de {$valor} | Saldo atual: {$this->saldo} | Limite: {$this->limite}<br/>";
        endif;
    }
}

$c1 = new Corrente(100, 2538, 5000, 500);
$c1->depositar(1800);
$c1->saque(2500);
$c1->saque(5000);

echo $c1->getDetalhes();