create database FishFeeder;
use FishFeeder;

create table animais (
codigo int auto_increment,
idade int (3),
nome varchar(255),
sexo varchar(255),
primary key (codigo));

insert into animais (nome,idade, sexo)
values ('leão', '1', 'masculino');