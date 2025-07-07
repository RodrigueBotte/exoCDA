# Exercice sur PHP Natif

### Comment créer sa base de donnée :

Afin de créer facilement sa BDD, il suffit de rentrer les informations ci dessous pour la créer, et ça intégrera aussi la table à l'intérieur de notre base de donnée.

> CREATE DATABASE Pierre_Sofip;

> USE pierre_sofip;

> CREATE TABLE stagiaire 
(
  	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(50) NOT NULL,
    prenom varchar(50) NOT NULL,
    age int NOT NULL,
    date_naissance date NOT NULL,
    email varchar(50) not null,
    ville varchar(50) not null
);

### Utilisation du site et du CRUD

La page d'**Accueil** permet de retrouver les différentes informations liées au centre de formation de la Sofip ainsi que les détails de la formation de Concepteur Développeur d'Application

---
Sur la page **Liste des élèves**, on retrouve la liste de tous les éléves déjà inscrit avec la possiblité de modifier les informations concernant la personnes ou de supprimer celle-ci.

---
La page **Test BDD** permet de vérifier que la connexion avec la base de donnée se fait correctement. Ainsi, en cas de soucis avec les différents onglets, vous pourrez vérifier instantannément s'il y un problème de connexion avec la BDD.

---
Enfin, sur la page **Ajouter un élève** permettra d'ajouter un élève pour qu'il puisse être retrouvé sur la liste des élèves inscrit à la formation.


