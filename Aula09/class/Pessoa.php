<?php 

class Pessoa{
    public $codigo;
    var $nome;
    public $altura;
    public $dn;

    function verIdade(){
        $anoatual = 2022;
        $id = $anoatual - $this->dn;
        echo $id;
    }

    function __construct($cod, $n, $alt, $dn)
    {
        $this->codigo = $cod;
        $this->nome = $n;
        $this->altura = $alt;
        $this->dn = $dn;

    }

    function __destruct()
    {
        echo "<h2>Operação finalizada sr. {$this->nome}</h2>";
    }
}

    $fernando = new Pessoa("123", "Fernando", "1.90", 1995);

    $fernando->verIdade();
