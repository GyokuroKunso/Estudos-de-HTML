CREATE DATABASE henrique;
USE henrique;

CREATE TABLE curso (
cod_curso INTEGER,
nome_curso VARCHAR(100),
sigla VARCHAR(10),
PRIMARY KEY (cod_curso)
);

CREATE TABLE disciplina (
cod_disciplina INTEGER,
nome_disciplina VARCHAR(100),
PRIMARY KEY (cod_disciplina)
);

CREATE TABLE turma (
cod_turma INTEGER,
turno VARCHAR(20),
disciplina INTEGER,
PRIMARY KEY(cod_turma),
CONSTRAINT fk_disciplina_turma FOREIGN KEY(disciplina)
REFERENCES disciplina(cod_disciplina)
);

CREATE TABLE aluno (
matricula VARCHAR(20),
nome VARCHAR(200),
cpf VARCHAR(15),
PRIMARY KEY (matricula)
);

CREATE TABLE aluno_curso (
cod_aluno_curso INTEGER,
aluno VARCHAR(20),
curso INTEGER,
PRIMARY KEY (cod_aluno_curso),
CONSTRAINT fk_aluno FOREIGN KEY (aluno)
REFERENCES aluno(matricula),
CONSTRAINT fk_curso FOREIGN KEY (curso)
references curso (cod_curso)
);

CREATE TABLE aluno_turma (
cod_aluno_turma INTEGER,
aluno VARCHAR(20),
turma INTEGER,
PRIMARY KEY (cod_aluno_turma),
CONSTRAINT fk_aluno_turma FOREIGN KEY (aluno)
REFERENCES aluno (matricula),
CONSTRAINT fk_turma FOREIGN KEY(turma)
REFERENCES turma (cod_turma)
);

CREATE TABLE curso_disciplina (
cod_curso_disciplina INTEGER,
curso INTEGER,
disciplina INTEGER,
PRIMARY KEY (cod_curso_disciplina),
CONSTRAINT fk_curso_disciplina FOREIGN KEY (curso)
REFERENCES curso (cod_curso),
constraint fk_disciplina_curso FOREIGN KEY (disciplina)
REFERENCES disciplina (cod_disciplina)
);

INSERT INTO curso (cod_curso, nome_curso,sigla)
VALUES
     (1, "Ciência da computação", "CCO"),
     (2, "Analise de Desenvolvimento de Sistema","ADS"),
     (3, "Jogos Digitais","JDI"),
     (4, "Gestão de Tecnologia de Informação","GTI"),
     (5, "Sistema de Informação","STI");
     
INSERT INTO disciplina (cod_disciplina, nome_disciplina)
VALUES
      (1,"Banco de dados"),
      (2,"Programação"),
      (3,"Engenharia de Softwares"),
      (4,"Lógica Boolena"),
      (5,"Computação Gráfica"),
      (6,"Redes de Computadores");

INSERT INTO aluno (matricula,nome,cpf)
VALUES
      ("202300001","Bruce Wayne","1111111111-11"),
      ("202300002","Clark Kent","222222222-22"),
      ("202300003","Arthur Curry","33333333-33"),
      ("202300004","Barry Allen","44444444-44"),
      ("202300005","Diane Prince","55555555-55"),
      ("2002300006","Steve Rogers","6666666-66"),
      ("2002300007","Antony Starks","777777777-77"),
      ("2002300008","Peter Paker","888888888-88"),
      ("2002300009","Bruce Banner","999999999-99");
    
INSERT INTO turma (cod_turma,turno, disciplina)
VALUES
      (1,"Manhã",1),
      (2,"Manhã",2),
      (3,"Manhã",3),
      (4,"Manhã",4),
      (5,"Manhã",5),
      (6,"Manhã",6),
      (7,"Noite",1),
      (8,"Noite",2),
      (9,"Noite",3),
      (10,"Noite",4),
      (11,"Noite",5),
      (12,"Noite",6);
     
INSERT INTO curso_disciplina
(cod_curso_disciplina, curso, disciplina)
VALUES
      (1,1,1),
      (2,1,2),
      (3,1,3),
      (4,1,4),
      (5,1,5),
      (6,1,6),
      (7,2,1),
      (8,2,2),
      (9,2,3),
      (10,2,4),
      (11,2,5),
      (12,2,6),
      (13,3,1),
      (14,3,2),
      (15,3,3),
      (16,3,4),
      (17,3,5),
      (18,3,6),
      (19,4,1),
      (20,4,2),
      (21,4,3),
      (22,4,4),
      (23,4,5),
      (24,4,6),
      (25,5,1),
      (26,5,2),
      (27,5,3),
      (28,5,4),
      (29,5,5),
      (30,5,6);
		
		
INSERT INTO aluno_curso (cod_aluno_curso, aluno, curso)
VALUES
      (1,'202300001',1),
      (2,'202300002',2),
      (3,'202300003',3),
      (4,'202300004',4),
      (5,'202300005',5),
      (6,'202300006',1),
      (7,'202300007',2),
      (8,'202300008',3),
      (9,'202300009',4);

INSERT INTO aluno_turma (cod_aluno_turma, aluno, turma)
VALUES
      (1,'202300001',1),
      (2,'202300001',2),
      (3,'202300002',1),
      (4,'202300002',2),
      (5,'202300003',1),
      (6,'202300003',2),
      (7,'202300004',1),
      (8,'202300004',2),
      (9,'202300005',1),
      (10,'202300005',2),
      (11,'202300006',9),
      (12,'202300006',10),
      (13,'202300007',9),
      (14,'202300007',10),
      (15,'202300008',9),
      (16,'202300008',10),
      (17,'202300009',9),
      (18,'202300009',10);
     
      
SELECT matricula,nome,cpf FROM aluno
WHERE matricula = "202300006"
WHERE nome = "Steve Rogers"
WHERE cpf = "6666666-66"


SELECT * FROM curso , aluno
WHERE sigla = "JDI" OR sigla = "CCO" 
AND cpf = "111111111-11"

SELECT * FROM aluno_curso ,aluno WHERE matricula = "202300001"

SELECT *FROM aluno_curso
INNER JOIN aluno ON aluno = matricula
WHERE matricula = "202300001"


SELECT curso, matricula, nome, cpf FROM aluno_curso
INNER JOIN aluno ON aluno = matricula
INNER JOIN curso ON curso = cod_curso
WHERE matricula = "202300001"

