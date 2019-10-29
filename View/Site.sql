CREATE DATABASE Projeto;
USE Projeto;

CREATE TABLE Usuario (ID INT AUTO_INCREMENT PRIMARY KEY, Admin Bool, Nome VARCHAR(100) NOT NULL, Email VARCHAR(100) UNIQUE NOT NULL, Senha VARCHAR(100) NOT NULL, Artistas VARCHAR(1000), Voto Bool);

CREATE TABLE Artista (Twitter VARCHAR(100) PRIMARY KEY, LinkArtes VARCHAR(2000));

CREATE TABLE Votos (Twitter VARCHAR(100) PRIMARY KEY, Nome VARCHAR(100), Link VARCHAR(100), Votos INT);

ALTER TABLE Votos ADD CONSTRAINT Artista_Twitter FOREIGN KEY (Twitter) REFERENCES Artista (Twitter);

INSERT INTO Usuario (Admin, Nome, Email) VALUES (False, "Visitante", "***");
INSERT INTO Usuario (Admin, Nome, Email, Senha) values (True, "Fernanda", "Fernandarimel@gmail.com", "123");

DROP TABLE Usuario;

SELECT * FROM Usuario;