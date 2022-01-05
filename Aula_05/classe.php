<?php
// Criação de um Objeto
class Produto{
    // Atributos desse objetos / caracteristicas dele
    public $codigo;
    public $genero;
    public $categoria;
    public $preco;
    public $img;
    public $quantidade;
    public $tamanho;
    public $cor;
    public $marca;

    // metodos ou ações que esse objeto pode fazer
}

// Intanciamento do objeto em uma variável
$camisa = new Produto();

// Atribuição de valores aos atributos
$camisa -> codigo = '001';
$camisa -> genero = 'Masculino';
$camisa -> categoria = 'Polo';
$camisa -> preco = 229.99;
$camisa -> img = 'imagem_produto';
$camisa -> quantidade = 23;
$camisa -> tamanho = 'GG';
$camisa -> cor = 'Preta';
$camisa -> marca = 'Lacoste';

print_r($camisa);