<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tituloSite = "Camisa Facil";
        $produtos = array ('Camisa 01', 'Camisa 02');
    ?>

    <h1><?php echo $tituloSite ?></h1>
    <p>A melhor loja de camisas da região</p>
    <ul>
        <li><?php echo $produtos[0] ?></li>
        <li><?php echo $produtos[1] ?></li>
    </ul>

    <?php 
        include_once 'classe_atributos_métodos.php'
    ?>

</body>
</html>