<?php

// Construtor e Destrutor
// interface e implements - Encapsulamento
// Herança - extends, parent

require "heranca.php";

class Herdeira extends Configura{
    public function view(){
        echo parent::inverte($this->valor);
        echo "<br>";
        echo $this->cor;
    }

}

$mostra = new Herdeira();

$mostra->view();

echo "<pre>";
print_r($mostra);
echo "</pre>";
