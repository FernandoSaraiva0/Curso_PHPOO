<?php
class Login{
    public $email;
    public $senha;

    public function Logar(){
        if($this->email == "teste@teste.com.br" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login();
$logar -> email = "teste@teste.com.br";
$logar -> senha = "123456";
$logar->Logar();

// Com Getter e Setter
class Loogin{
    private $email;
    private $senha;

    public function Logar(){
        if($this->email == "teste@teste.com.br" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Loogin();
$logar -> email = "teste@teste.com.br";
$logar -> senha = "123456";
$logar->Logar();