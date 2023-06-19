-- Active: 1686828955525@@127.0.0.1@3306@phpmyadmin
drop database dbbaseDeTeste;
create database dbbaseDeTeste;

use dbbaseDeTeste;

create table tbcadastromd(

codCad int not null auto_increment,
nomeCompleto varchar(50),
datadeNascimento date,
email varchar(256),
telefone varchar (30),
sexo varchar(15),
ncpf varchar(15),
endereco varchar(50),
n_endereco char (4),
cep varchar(20),
bairro varchar(30),
cidade varchar(40),
estado varchar(30),
senha varchar(50),
primary key (codCad)
);