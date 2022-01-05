<?php
$tituloSite = 'Exercicio_01';
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
echo '<h1>Numeros Digitados</h1><br>';
echo '<h2>'.$num1.'</h2> <br>';
echo '<h2>'.$num2.'</h2> <br>';

// Realizar operações

echo '<h1>Soma</h1><br>';
echo $num1 + $num2;

echo '<h1>Subtração</h1><br>';
echo $num1 - $num2;

echo '<h1>Multiplicação</h1><br>';
echo $num1 * $num2;

echo '<h1>Divisão</h1><br>';
echo $num1 / $num2;

echo '<h1>Resto da Divisão</h1><br>';
echo $num1 % $num2;