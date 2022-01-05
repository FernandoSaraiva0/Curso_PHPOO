<?php

class Calculadora {
    private $num1;
    private $num2;
    private $op;
    public $result;

    public function getNum1(){
        return $this->num1;
    }

    public function setNum1($num1){
        $this->num1 = $num1;
    }

    public function getNum2(){
        return $this->num2;
    }

    public function setNum2($num2){
        $this->num2 = $num2;
    }

    public function getOp(){
        return $this->op;
    }

    public function setOp($op){
        $this->op = $op;
    }

    public function __construct($num1, $num2, $op)
    {
        $this->setNum1($num1);
        $this->setNum2($num2);
        $this->setOp($op);

    }

    public function Calcular(){
        if($_POST){
            switch($this->getOp()){
                case 'som':
                   $this->result = $this->getNum1() + $this->getNum2();
                   echo $this->result; 
                    break;
                case 'sub':
                    $this->result = $this->getNum1() - $this->getNum2(); 
                    echo $this->result; 
                    break;
                case 'mult':
                    $this->result = $this->getNum1() * $this->getNum2(); 
                    echo $this->result; 
                    break;
                case 'div':
                    $this->result = $this->getNum1() / $this->getNum2();
                    echo $this->result;  
                    break;
                case 'rest':
                    $this->result = $this->getNum1() % $this->getNum2();
                    echo $this->result;  
                    break;
    
            }
        }
    }
}