<?php
require_once '../../config/connexionPdo.php';

$con = connectionDb();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = $con->prepare('INSERT INTO stagiaire (nom, prenom, age, date_naissance, email, ville) values (?, ?, ?, ?, ?, ?) ');
    $sql->execute([$_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['dateNaissance'], $_POST['email'], $_POST['ville'], ]);
    // echo '<script> alert("Eleve enregistré");</script>';
    header('Location: ../../templates/listeEleve.php');

}
?>