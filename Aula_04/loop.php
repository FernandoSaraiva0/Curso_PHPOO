<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php $caminho = 'index.php'?>
    <div class="loop">
        <h1>Principais produtos</h1>
        <a href="<?php $caminho?>"> Voltar </a>
        <ul class="produtos">
            <?php 
                $total = 1;
                $maximo = 500;
                while ($total <= $maximo):
            ?>
            <li>Produto <?php echo $total?></li>
            <?php
                $total++;
                endwhile;
            ?>
        </ul>
    </div>
</body>
</html>