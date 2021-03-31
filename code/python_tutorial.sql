CREATE DATABASE teste
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

DROP DATABASE teste;

USE teste;

CREATE TABLE resultados(
	id		int NOT NULL AUTO_INCREMENT,
	nome	varchar(60) NOT NULL,
    q1		char(1) NOT NULL,
    q2		char(1) NOT NULL,
    q3		char(1) NOT NULL,
    q4		char(1) NOT NULL,
    q5		char(1) NOT NULL,
    q6		char(1) NOT NULL,
    q7		char(1) NOT NULL,
    q8		char(1) NOT NULL,
    q9		char(1) NOT NULL,
    q10		char(1) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET UTF8;

DROP TABLE resultados;

SELECT * FROM resultados;

DESCRIBE resultados;

INSERT INTO resultados VALUES (DEFAULT,'teste','a','a','a','a','a','a','a','a','a','a');

ALTER TABLE resultados
MODIFY nome varchar(30) NOT NULL UNIQUE;

DELETE FROM resultados WHERE id > 0;

ALTER TABLE resultados AUTO_INCREMENT=1;