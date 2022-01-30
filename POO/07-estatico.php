<?php

class Login{
    public static $user;

    public static function verificaLogin(){
        //$this->$variable só se aplica quando a classe é instanciada
        echo "O usuário ".self::$user." está logado!";
    }
    
    public function Deslogar(){
        echo "<hr>Você saiu do sistema!";
    }
}

//Ao utilizar métodos estáticos, não é necessário mais instanciar a classe
//O mesmo se aplica para atributos estáticos

Login::$user = "Victor Osses";
Login::verificaLogin();

$login = new Login();
$login->Deslogar();


