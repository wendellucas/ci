CREATE DATABASE prova_ci;

USE prova_ci;

CREATE TABLE produtos(
    ID INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR (25) NOT NULL,
    preco VARCHAR (10),
    descricao VARCHAR (2000) NOT NULL,
    categoria INT,
    ativo INT,
    quantidade INT,
    img VARCHAR (2000),
    PRIMARY KEY (ID)
);