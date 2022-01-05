<?php

    class Configura{   
        public function ver(){
            echo "Eu sou a classe mãe <br>";
        }

        function __construct()
        {
            return $this->ver();
        }

    }

    class Herdeira extends Configura{
         public function ver(){
             echo "Eu sou a classe filha";
         }

        function __construct()
        {
            return $this->ver();
        }
    
    }

    $classeMae = new Configura();
    $classeFilha = new Herdeira();