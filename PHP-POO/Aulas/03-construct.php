<?php
//Utilizar getters e setters é permite tratar os dados de input do usuário

class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

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

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


    public function Logar(){
        if($this->email == "teste@gmail.com" and $this->senha == "123456"):
            echo "Logado com sucesso!<br>";
        else:
            echo "Dados inválidos!<br>";
        endif;
    }
}

$logar = new Login("teste()@gmail.com", "123456", "Victor");
$logar->Logar();

echo $logar->getEmail();
