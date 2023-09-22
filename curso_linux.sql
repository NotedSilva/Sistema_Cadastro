CREATE DATABASE curso_linux;
USE curso_linux;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    ra INT NOT NULL,
    senha VARCHAR(255) NOT NULL,
    curso VARCHAR(255) NOT NULL,
    media FLOAT,
    frequencia FLOAT
);

CREATE TABLE notas_faltas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT,
    nota1 FLOAT,
    nota2 FLOAT,
    nota3 FLOAT,
    nota4 FLOAT,
    faltas INT,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id)
);