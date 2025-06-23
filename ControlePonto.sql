CREATE DATABASE ControlePonto;
USE ControlePonto;

CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) UNIQUE NOT NULL,
    Senha VARCHAR(255) NOT NULL
);

CREATE TABLE Funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

CREATE TABLE ControlePonto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    funcionario_id INT,
    data DATE NOT NULL,
    entrada TIME NOT NULL,
    saida_almoco TIME,
    volta_almoco TIME,
    saida TIME,
    FOREIGN KEY (funcionario_id) REFERENCES Funcionarios(id)
);

INSERT INTO Usuarios (email, Senha) VALUES 
('henriquepaleari@gmail.com','henrique123'),
('usuario1', 'root'),
('usuario2', 'root'),
('usuario3', 'root'),
('gustavocosta@gmail.com','Guga0804');

select * from usuarios; 

CREATE TABLE cliques (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_hora DATETIME
);