CREATE DATABASE Registro

USE Registro

CREATE TABLE Usuario (

	idUsuario tinyint unsigned PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(30) NOT NULL,
	correo varchar(80) NOT NULL UNIQUE,
	password char(8) NOT NULL
)

CREATE TABLE Minijuego (
	
	idMinijuego tinyint unsigned PRIMARY KEY,
	nombre varchar(50) NOT NULL,
	url varchar(80) NULL
)

CREATE TABLE Preferencia_Usuario(

	idUsuario tinyint unsigned,
	idMinijuego tinyint unsigned,
	PRIMARY KEY (idUsuario, idMinijuego),
	FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario),
	FOREIGN KEY (idMinijuego) REFERENCES Minijuego(idMinijuego)
)

INSERT INTO Minijuego(idMinijuego, nombre, url) VALUES 
	(1, 'PuzzleTablaPeriódica', 'puzzleTablaPeriodica.com'),
	(2, 'Reciclaje', 'reciclaje.com'),
	(3, 'FlashCards', 'flashcards.com'),
	(4, 'Multiplos', 'multiplos.com');
	
