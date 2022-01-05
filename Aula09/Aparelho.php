<?php

require "index.php";

class Aparelho implements Construtor{
    private $volume;
    private $ligado;
    private $bandeja;

    public function __construct($volume, $ligado, $bandeja)
    {
        $this->setVolume($volume);
        $this->setLigado($ligado);
        $this->setBandeja($bandeja);
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($volume){
        $volume = 50;
        $this->volume = $volume;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($ligado){
        $this->volume = $ligado;
    }

    private function getBandeja(){
        return $this->bandeja;
    }

    private function setBandeja($bandeja){
        $this->volume = $bandeja;
    }

    public function Ligar(){
        $this->setLigado(true);
        echo "Ligado";
        print_r($this->getLigado());
    }

    public function Desligar(){
        $this->setLigado(false);
        echo "Desligado";
        print_r($this->getLigado());
    }

    public function AumentarVolume(){
        if($this->getLigado() == true):
            $this->setVolume(100);
            print_r($this->getVolume());
        else:
            echo "Desligado";
        endif;

    }

    public function ReduzirVolume(){
        if($this->getLigado() == true):
            $this->setVolume(0);
            print_r($this->getVolume());
        else:
            echo "Desligado";
        endif;
    }

    public function AbrirBandeja(){
        $this->setBandeja(true);
        echo "Abrindo bandeja";
        print_r($this->getBandeja());
    }

    public function FecharBandeja(){
        $this->setBandeja(false);
        echo "Fechando bandeja";
        print_r($this->getBandeja());
    }
}

$som = new Aparelho(100, false, false);

echo "<pre>";
print_r($som);
echo "</pre>";

$som->AbrirBandeja();

