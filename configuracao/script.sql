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

create table agendamento (
codigo int auto_increment,
hora varchar (255),
dia varchar(255),
racao varchar(255),
primary key (codigo));

insert into agendamento (hora, dia, racao)
values ('13:00', '25', 'A');