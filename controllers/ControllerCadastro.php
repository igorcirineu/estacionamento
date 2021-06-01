<?php
include("../includes/Variaveis.php");
include("../class/ClassCrud.php");



if ($AcaoCli == 'Cadastrar') {
    $Crud = new ClassCrud();
    $Crud->insertDB(
        "cliente",
        "?,?,?",
        array(
            $CPF,
            $Nome,
            $QtdUso
        )
    );
} else {
    $Crud->updateDB(
        "cliente",
        "CPF=?,Nome=?,QtdUso=?",
        "CPF=?",
        array(
            $CPF,
            $Nome,
            $QtdUso,
            $CPF
        )
    );
    echo "Cadastro Editado com Sucesso!";
}
$Crud->insertDB(
    "veiculo",
    "?,?,?",
    array(
        $Placa,
        $Modelo,
        $QtdEst
    )
);

$Crud->insertDB(
    "estadia",
    "?,?,?,?,?,?,?",
    array(
        $Id,
        $HrEnt,
        $HrSai,
        $Valor,
        $Stats,
        $CPF,
        $Placa
    )
);
echo "Cadastro Realizado com Sucesso!";
