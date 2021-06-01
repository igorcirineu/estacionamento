<?php

if (isset($_POST['AcaoCli'])) {
  $AcaoCli = filter_input(INPUT_POST, 'AcaoCli', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['AcaoCli'])) {
  $AcaoCli = filter_input(INPUT_GET, 'AcaoCli', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $AcaoCli = "";
}

if (isset($_POST['CPF'])) {
  $CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['CPF'])) {
  $CPF = filter_input(INPUT_GET, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $CPF = "";
}

if (isset($_POST['Nome'])) {
  $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Nome'])) {
  $Nome = filter_input(INPUT_GET, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Nome = "";
}

if (isset($_POST['QtdUso'])) {
  $QtdUso = filter_input(INPUT_POST, 'QtdUso', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['QtdUso'])) {
  $QtdUso = filter_input(INPUT_GET, 'QtdUso', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $QtdUso = 0;
}

if (isset($_POST['Placa'])) {
  $Placa = filter_input(INPUT_POST, 'Placa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Placa'])) {
  $Placa = filter_input(INPUT_GET, 'Placa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Placa = "";
}

if (isset($_POST['Modelo'])) {
  $Modelo = filter_input(INPUT_POST, 'Modelo', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Modelo'])) {
  $Modelo = filter_input(INPUT_GET, 'Modelo', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Modelo = "";
}

if (isset($_POST['QtdEst'])) {
  $QtdEst = filter_input(INPUT_POST, 'QtdEst', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['QtdEst'])) {
  $QtdEst = filter_input(INPUT_GET, 'QtdEst', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $QtdEst = 0;
}

if (isset($_POST['Id'])) {
  $Id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Id'])) {
  $Id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Id = 0;
}

if (isset($_POST['HrEnt'])) {
  $HrEnt = filter_input(INPUT_POST, 'HrEnt', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['HrEnt'])) {
  $HrEnt = filter_input(INPUT_GET, 'HrEnt', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $HrEnt = new DateTime();
  $HrEnt->getTimestamp();
}

if (isset($_POST['HrSai'])) {
  $HrSai = filter_input(INPUT_POST, 'HrSai', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['HrSai'])) {
  $HrSai = filter_input(INPUT_GET, 'HrSai', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $HrSai = 0;
}

if (isset($_POST['Valor'])) {
  $Valor = filter_input(INPUT_POST, 'Valor', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Valor'])) {
  $Valor = filter_input(INPUT_GET, 'Valor', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Valor = 0;
}

if (isset($_POST['Stats'])) {
  $Stats = filter_input(INPUT_POST, 'Stats', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Stats'])) {
  $Stats = filter_input(INPUT_GET, 'Stats', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Stats = "";
}
