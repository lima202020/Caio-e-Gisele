-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE servico (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
tipo VARCHAR(30),
num_confir INTEGER,
preco_diaria DOUBLE
)

CREATE TABLE cliente (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
n_casa VARCHAR(7),
rua VARCHAR(50),
bairro VARCHAR(50),
cidade VARCHAR(50),
estado VARCHAR(30),
pais VARCHAR(30),
cep VARCHAR(20),
data_nasc VARCHAR(15),
nome VARCHAR(100),
tel_celular VARCHAR(20),
tel_fixo VARCHAR(20),
email VARCHAR(100)
)

CREATE TABLE quarto (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
tipo VARCHAR(20),
numero INTEGER,
valor_diaria DOUBLE,
andar VARCHAR(10)
)

CREATE TABLE cliente_servico (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
cod_servico INTEGER,
cod_cliente INTEGER,
FOREIGN KEY(cod_servico) REFERENCES servico (cod),
FOREIGN KEY(cod_cliente) REFERENCES cliente (cod)
)

CREATE TABLE empresa (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
cnpj VARCHAR(20),
nome VARCHAR(100),
foto VARCHAR(60),
email VARCHAR(100),
slogan VARCHAR(50),
num VARCHAR(7),
rua VARCHAR(50),
bairro VARCHAR(50),
cidade VARCHAR(50),
estado VARCHAR(30),
pais VARCHAR(30),
cep VARCHAR(20),
tel_celular VARCHAR(20),
tel_fixo VARCHAR(20),
twitter VARCHAR(70),
instagram VARCHAR(70),
facebook VARCHAR(70)
)

CREATE TABLE administrador (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
login VARCHAR(100),
senha VARCHAR(50)
)

CREATE TABLE administrador_cliente_quarto (
cod INTEGER PRIMARY KEY AUTO_INCREMENT,
cod_cliente INTEGER,
cod_quarto INTEGER,
cod_administrador INTEGER,
num_reserva INTEGER,
data_inicio VARCHAR(15),
data_fim VARCHAR(15),
hora VARCHAR(17),
tipo_pagamento VARCHAR(20),
qtd_adulto VARCHAR(5),
qtd_crianca VARCHAR(5),
FOREIGN KEY(cod_cliente) REFERENCES cliente (cod),
FOREIGN KEY(cod_quarto) REFERENCES quarto (cod),
FOREIGN KEY(cod_administrador) REFERENCES administrador (cod)
)

