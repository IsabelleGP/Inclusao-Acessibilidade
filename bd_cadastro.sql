cadastrocreate database bd_cadastro;
show databases;
use bd_cadastro;

drop table cadastro;

CREATE TABLE cadastro (
	id int(11) primary key auto_increment,
	nome varchar(20) NOT NULL,
    sobrenome varchar(30) NOT NULL,
    email varchar(50) NOT NULL,
	senha varchar(10) NOT NULL,
    tipo_def varchar(100) NOT NULL,
    sexo varchar(20) NOT NULL,
    timestamp timestamp DEFAULT CURRENT_TIMESTAMP);

select * from cadastro;
/*INSERT INTO Corrida VALUES ('1780', 'DAE6534', '2003-02-16');*/
 