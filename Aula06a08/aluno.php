<?php
    class Aluno{
        public $nome;
        public $dn;
        private $cpf;
        public $end;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getDn(){
            return $this->dn;
        }
        public function setDn($dn){
            $this->dn = $dn;
        }

        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getEnd(){
            return $this->end;
        }
        public function setEnd($end){
            $this->end = $end;
        }



        public function __construct($nome, $dn, $cpf, $end)
        {
            $this->setNome($nome);
            $this->setDn($dn);
            $this->setCpf($cpf);
            $this->setEnd($end);
        }
    }

    $nicson = new Aluno('Nicson', '03-08-79', '00000000000', 'Rua imaginária');
    echo "<pre>";
    print_r($nicson);
    echo "</pre>";
?>