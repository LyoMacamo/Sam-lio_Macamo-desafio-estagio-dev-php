CREATE DATABASE formulariovenda;
use formulariovenda;

CREATE TABLE usuario(idusuario int AUTO_INCREMENT NOT null PRIMARY KEY,   
nome varchar(20), username varchar(20), senha varchar(12));
    
CREATE TABLE cliente(idcliente int AUTO_INCREMENT NOT null PRIMARY KEY, consumidor_empresa varchar(15), endereco varchar(100), telefone varchar(15),
usuarioid int, FOREIGN KEY(usuarioid) REFERENCES usuario(idusuario));

CREATE TABLE produdo(idproduto int AUTO_INCREMENT NOT null PRIMARY KEY,
clienteid int, nomeProduto varchar(100), descricao varchar(250), quantidade int(11), 
valor decimal(10,2), datapedido timestamp, FOREIGN KEY(clienteid) REFERENCES cliente(idcliente));