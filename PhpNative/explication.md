CREATE DATABASE Pierre_Sofip;

USE pierre_sofip;

CREATE TABLE stagiaire 
(
  	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(50) NOT NULL,
    prenom varchar(50) NOT NULL,
    age int NOT NULL,
    date_naissance date NOT NULL,
    email varchar(50) not null,
    ville varchar(50) not null
);