create database if not exists desafio;

use desafio;

CREATE TABLE IF NOT EXISTS container (
	idContainer INT NOT NULL auto_increment,
    nm_conteiner char(11) NOT NULL,
    cliente VARCHAR (100) NOT NULL,
    tipo int NOT NULL,
    status VARCHAR(15) NOT NULL,
    categoria VARCHAR(15) NOT NULL,
	constraint pk_container
		PRIMARY KEY (idContainer)
);
	
