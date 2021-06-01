CREATE TABLE IF NOT EXISTS cliente (
   CPF int NOT NULL PRIMARY KEY,
   Nome varchar(90) NOT NULL,
   QtdUso int NOT NULL 
);

CREATE TABLE IF NOT EXISTS veiculo (
   Placa varchar(10) NOT NULL PRIMARY KEY,
   NomeCarro varchar(90) NOT NULL,
   QtdEst int NOT NULL 
);

CREATE TABLE IF NOT EXISTS estadia (
   Id int NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   HrEnt TIMESTAMP DEFAULT CURRENT_DATE() NOT NULL,
   HrSai TIMESTAMP NOT NULL,
   Valor int NOT NULL,
   Stats ENUM('Aberto','Pago'),
   IdCliente int not null,
   IdVeiculo varchar(10) not null,
   FOREIGN KEY (IdCliente) REFERENCES cliente (CPF),
   FOREIGN KEY (IdVeiculo) REFERENCES veiculo (Placa)    
);

CREATE TABLE IF NOT EXISTS estacionamento (
   Id int NOT NULL PRIMARY KEY,
   QtdVagas int NOT NULL  
);