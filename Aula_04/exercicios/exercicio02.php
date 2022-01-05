<?php
$num = $_GET['num'];
$op = $_GET['operacao'];

    switch($op){
        case 'soma':
            for ($i=0; $i<=10; $i++){
                echo "{$num}+{$i}=".($num+$i)."<br>";
            }
        break;

        case 'subtracao':
            for ($i=0; $i<=10; $i++){
                echo "{$num}-{$i}=".($num-$i)."<br>";
            }
        break;

        case 'multiplicacao':
            for ($i=0; $i<=10; $i++){
                echo "{$num}*{$i}=".($num*$i)."<br>";
            }
        break;

        case 'divisao':
            for ($i=1; $i<=10; $i++){
                echo "{$num}/{$i}=".($num/$i)."<br>";
            }
        break;

        case 'resto':
            for ($i=1; $i<=10; $i++){
                echo "{$num}%{$i}=".($num%$i)."<br>";
            }
        break;
    }


?>