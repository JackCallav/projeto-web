CREATE DATABASE Projeto;
USE Projeto;

CREATE TABLE Usuario (ID INT AUTO_INCREMENT PRIMARY KEY, Admin Bool, Nome VARCHAR(100) NOT NULL, Email VARCHAR(100) UNIQUE NOT NULL, Senha VARCHAR(100) NOT NULL, Artistas VARCHAR(1000), Voto Bool);

CREATE TABLE Artista (Twitter VARCHAR(100) PRIMARY KEY, LinkArte1 VARCHAR(1000), LinkArte2 VARCHAR(1000), LinkArte3 VARCHAR(1000), LinkArte4 VARCHAR(1000), ultima_arte int\);

CREATE TABLE Votos (Twitter VARCHAR(100) PRIMARY KEY, Nome VARCHAR(100), Link VARCHAR(100), Votos INT);

ALTER TABLE Votos ADD CONSTRAINT Artista_Twitter FOREIGN KEY (Twitter) REFERENCES Artista (Twitter);

CREATE TABLE Artista_espera (Twitter VARCHAR(100) PRIMARY KEY, LinkArte1 VARCHAR(1000));

INSERT INTO Usuario (Admin, Nome, Email) VALUES (False, "Visitante", "***");
INSERT INTO Usuario (Admin, Nome, Email, Senha) values (True, "Fernanda", "Fernandarimel@gmail.com", "123");

DROP TABLE Usuario;

SELECT * FROM Usuario;