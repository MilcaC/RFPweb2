create database BDRF;

use BDRF;

create table usuarios
(
	id int auto_increment,
    nome text not null,
    nascimento date not null,
    email text not null,
    login text not null,
    senha text not null,
    primary key(id)
);