﻿# estacionamento

## Sobre o sistema:

* O sistema consite em estacionamento rotativo.

## Tecnologias utilizadas

### Frontend

* Linguagens: HTML, CSS e Javascript

### Backend

* PHP

### Banco de dados

* MySQL


## Rodar o projeto local:

* Inciar o projeto:
Ter um servidor APACHE local, no caso utilizei o XAMPP, colocando a pasta do projeto na pasta htdocs.

* banco:
Criar no phpMyAdmin um banco chamado "estacionamento" e rodar o sql contido no arquivo banco.sql.

* banco:
* Edite o arquivo class/ClassConexao.php com os dados do seu banco na seguinte linha.
```bash
$Con = new PDO("mysql:host=localhost;dbname=estacionamento", "root", "");
```
