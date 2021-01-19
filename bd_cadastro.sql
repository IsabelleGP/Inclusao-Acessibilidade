create database c_usuario;
show databases;
use c_usuario;

CREATE TABLE cadastro (
	senha varchar(10) NOT NULL PRIMARY KEY,
    nome varchar(20),
    sobrenome varchar(30),
    sexo varchar(20),
    email varchar(50),
    tipo_def varchar(100));

select * from cadastro;
/*INSERT INTO Corrida VALUES ('1780', 'DAE6534', '2003-02-16');*/
 