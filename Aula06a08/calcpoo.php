<?php
    require "classes/Calculadora.php";

    $calc = new Calculadora($_POST['num1'], $_POST['num2'],  $_POST['op']);

    // $calc->setNum1($_POST['num1']);
    // $calc->setNum2($_POST['num2']);
    // $calc->setOp($_POST['op']);

    include "header.html";
?>
    <div class="col-12">
        <form class="col-6 m-auto"action="" method="POST">
            <label  class="form-label" for="">Primeiro Numero</label>
            <input class="form-control" type="number" name="num1" value=<?= $calc->getNum1() ?>>
            <br>
            <br>
            <label  class="form-label" for="">Segundo Numero</label>
            <input class="form-control" type="number" name="num2" value=<?= $calc->getNum2() ?>>
            <br>
            <br>
            <select class="form-select" name="op" id="">
                <option value="som" <?= ($calc->getOp() =='som')? 'Selected':'';?>>Somar</option>
                <option value="sub" <?= ($calc->getOp() =='sub')? 'Selected':'';?>>Subtrair</option>
                <option value="div" <?php if($calc->getOp() == 'div'){ echo 'Selected';} else { echo '';};?>>Dividir</option>
                <option value="mult" <?= ($calc->getOp() =='mult')? 'Selected':'';?>>Multiplicar</option>
                <option value="rest" <?= ($calc->getOp() =='rest')? 'Selected':'';?>>Resto</option>
            </select>
            <br>
            <br>
            <button class="btn btn-primary col-6" type="submit">Calcular</button>

            <div>
                <h2><?php $calc->Calcular();?></h2>
            </div>
        
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>