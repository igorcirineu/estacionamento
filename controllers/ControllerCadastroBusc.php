<?php
include("{$_SERVER['DOCUMENT_ROOT']}/estacionamento/class/ClassCrud.php");

if (isset($_POST['CPF'])) {
  $CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['CPF'])) {
  $CPF = filter_input(INPUT_GET, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $CPF = "";
}


  $Crud = new ClassCrud();
  $BFetch = $Crud->selectDB(
    "*",
    "cliente",
    "where CPF=?",
    array($CPF)
  );
  $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
  
  if (!empty($Fetch)) {
    $Acaocli = "Editar";
    $CPF = $Fetch['CPF'];
    $Nome = $Fetch['Nome'];
    $QtdUso = $Fetch['QtdUso'];
    
  } else {
    $AcaoCli = "Cadastrar";
    $CPF = "";
    $Nome = "";
    $QtdUso = 1; 
  }

