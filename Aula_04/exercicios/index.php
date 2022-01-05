<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercicio01</title>
</head>
<body>
    <!-- <form action="">
        <span>Primerio Número</span>
        <input type="text" name="num1">
        <span>Segundo Número</span>
        <input type="text" name="num2">
        <button type="submit"> Calcular </button>
    </form>

    <?php // include 'exercicio01.php'?> -->
<div class="container-fluid col-6 mt-5 p-3">
    <form class="form-control m-auto d-flex flex-column" action="">
        <span class="form-label my-3">Numero para criar a tabuada</span>
        <input  class="form-control mb-3" type="text" name="num">
        <select class="form-select mb-5" name="operacao" id="">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisao</option>
            <option value="resto">Resto da Divisao</option>
        </select>
        <button class="btn btn-primary mb-5 col-3" type="submit"> Criar Tabuada </button>
    </form>
    </div>
<div class="container-fluid col-6 mt-5 p-3">
    <?php
        $num = $_GET['num'];
        $op = $_GET['operacao'];
        ?>
         <h1 class="text-center">Tabuada de <?php echo $op ?></h1>
        <?php
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>