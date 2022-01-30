<?php
//Utilizar getters e setters é permite tratar os dados de input do usuário

class Login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar(){
        if($this->email == "teste@gmail.com" and $this->senha == "123456"):
            echo "Logado com sucesso!<br>";
        else:
            echo "Dados inválidos!<br>";
        endif;
    }
}

$logar = new Login();
$logar->setEmail("teste()@gmail.com");
$logar->setSenha("123456");

$logar->Logar();
echo $logar->getEmail();
