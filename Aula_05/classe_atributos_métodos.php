<?php
class Caneta{
    public $tampada;
    public $carga;
    public $modelo;
    public $cor;
    public $ponta;

    function Rabiscar(){
        if($this->tampada==true):
            echo "<h1> Estou tamapada, não posso rabiscar! </h1>";
        else:
            echo "<h1> Fazendo rabisco </h1>";
        endif;
    } 
}

$caneta1 = new Caneta();

$caneta1 -> tampada = false;
$caneta1 -> carga = 20;
$caneta1 -> modelo = 'Gel';
$caneta1 -> cor = 'Vermelha';
$caneta1 -> ponta = 0.7;
$caneta1 -> Rabiscar();

var_dump($caneta1);



$caneta2 = new Caneta();

$caneta2 -> tampada=true;
$caneta2 -> carga=100;
$caneta2 -> modelo='Esferográfica';
$caneta2 -> cor='Azul';
$caneta2 -> ponta=1.0;
$caneta2 -> Rabiscar();

print_r($caneta2);
echo "<br>";
print_r($caneta1);