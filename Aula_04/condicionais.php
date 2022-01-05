<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tituloSite = 'Camisa Facil';
    ?>
    <div class="condicional">

        <?php if ($tituloSite == 'Camisa Facil' ) { ?>
            <h1><?php echo $tituloSite ?></h1>
            <p> <?php echo $tituloSite ?> a melhor loja de camisas da região</p>
        <?php } else { ?>
            <h1>Erro 404 - Não encontramos o seu site</h1>
        <?php } ?>

    </div>

    <!-- Condionando página de compra -->
    <?php $comprou = true ?>
    <div class="compra">
        <?php if ($comprou == true) { ?>
        <p>Solicitar dados de envio do produto e mostrar o pix</p>
        <?php } else { ?>
            <h2> Pagamento recusado </h2>
        <?php } ?>
    </div>

</body>
</html>