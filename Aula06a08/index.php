
<?php

    $num1 = 0;
    $num2 = 0;
    $result = 0;
    $calcular = 'somar';

    if(isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case 'somar':
               $result = $num1 + $num2; 
                break;
            case 'subtrair':
                $result = $num1 - $num2; 
                break;
            case 'multiplicar':
                $result = $num1 * $num2; 
                break;
            case 'dividir':
                $result = $num1 / $num2; 
                break;
            case 'modulo':
                $result = $num1 % $num2; 
                break;

        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="col-12">
        <form class="d-flex flex-column container-fluid m-auto col-5 flex-wrap mt-4">
            <h1 class="mb-4 text-center">Calculara com PHP v.1.0</h1>
            <span class="mb-2 form-label">Primeiro número</span>
            <input class="form-control mb-3" type="number" name="num1" value=<?= $num1 ?> required>
            <span class="mb-2 form-label">Segundo número</span>
            <input class="form-control mb-4" type="number" name="num2" value=<?= $num2 ?> required>
            <select class="form-select mb-3" name="calcular">
                <option value="somar"<?= ($calcular =='somar')? 'Selected':'';?>>Somar</option>
                <option value="subtratir" <?= ($calcular =='subtratir')? 'Selected':'';?>>Subtratir</option>
                <option value="multiplicar" <?= ($calcular =='multiplicar')? 'Selected':'';?>>Multiplicar</option>
                <option value="dividir" <?= ($calcular =='dividir')? 'Selected':'';?>>Dividir</option>
                <option value="modulo" <?= ($calcular =='modulo')? 'Selected':'';?>>Modulo</option>
            </select>

            <button class=" col-lg-3 col-sm-11 col-md-11 mx-auto btn btn-primary mb-4" type="submit" value="calcular"> Calcular <i class="bi bi-calculator"></i></button>

            <h1 class="m-auto border border-2 p-lg-4 p-sm-2 border-success rounded-3 mb-4">O resulturado é <?= $result ?></h1>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>