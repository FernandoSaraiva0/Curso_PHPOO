<?php

$alunos = array (
    array("Nicson", "19", "Rua imaginaria", "000000000"),
    array("Ecilia", "19", "Rua imaginaria", "000000000"),
    array("Gabriele", "19", "Rua imaginaria", "000000000"),
    array("Marcos", "19", "Rua imaginaria", "000000000"),
    array("Igor", "19", "Rua imaginaria", "000000000")
);

foreach ($alunos as $aluno){

    echo "<pre>";
    print_r($aluno);
    echo "</pre>";
}