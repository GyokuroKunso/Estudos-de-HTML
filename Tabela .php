CREATE DATABASE uc_programacao;
USE uc_programacao;

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