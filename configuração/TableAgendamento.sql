create database FishFeeder;
use FishFeeder;

create table agendamento (
codigo int auto_increment,
hora varchar (255),
dia varchar(255),
racao varchar(255),
primary key (codigo));

insert into agendamento (hora, dia, racao)
values ('13:00', '25', 'A');