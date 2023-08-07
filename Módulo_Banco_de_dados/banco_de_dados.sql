create database usuarios;

use usuarios;

create table usuarios(
ID int(3) auto_increment,
Nome_Usuario varchar(35),
Senha_Usuario varchar(9),
Email_Usuario varchar(50),
 primary key (ID) 
);	

select * from usuarios;



create table usuarios(
ID int(3) auto_increment,
Nome_Usuario varchar(35),
Senha_Usuario varchar(9),
Email_Usuario varchar(50),
 primary key (ID) 
);	

select * from usuarios;

delete from usuarios where id=1;

CREATE TABLE tabela_bloqueio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    endereco_ip VARCHAR(255) NOT NULL,
    tentativas_login INT DEFAULT 0,
    tempo_desbloqueio DATETIME DEFAULT NULL
);

select * from tabela_bloqueio ;

CREATE TABLE tabela_bloqueio (
    id INT(11) NOT NULL AUTO_INCREMENT,
    endereco_ip VARCHAR(255) NOT NULL,
    tempo_desbloqueio DATETIME DEFAULT NULL,
    PRIMARY KEY (id)
);

select * from tabela_tentativas;

CREATE TABLE tabela_tentativas (
    id INT(11) NOT NULL AUTO_INCREMENT,
    endereco_ip VARCHAR(255) NOT NULL,
    data_tentativa DATETIME DEFAULT NULL,
    PRIMARY KEY (id)
);

Delete from tabela_tentativas where id >= 1;

