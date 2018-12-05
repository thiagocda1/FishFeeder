create database FishFeeder;
use FishFeeder;

create table usuario (
cod_user int auto_increment,
nome varchar (250),
email VARCHAR(100),
senha VARCHAR(20),
primary key (codigo));

create table animais (
cod_animal int auto_increment,
especie varchar(50),
idade int (3),
nome varchar(255),
sexo varchar(10),
primary key (cod_animal),
FOREIGN KEY (cod_animal) REFERENCES usuario (cod_user));

create table agendamento (
cod_agend int auto_increment,
DataHora TIMESTAMP (255),
descriçao varchar(255),
primary key (cod_agend),
FOREIGN KEY (cod_agend) REFERENCES usuario(cod_user),
FOREIGN KEY (cod_agend) REFERENCES animais (cod_animal));

select * from usuarios;
select * from animais;
select * from agendamento;


