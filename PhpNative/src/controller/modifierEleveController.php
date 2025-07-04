<?php
require_once __DIR__.'/../../config/connexionPdo.php';

$con = connectionDb();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idEleve = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $dateNaissance = $_POST['dateNaissance'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
}
$req = $con->prepare("UPDATE stagiaire set nom = ?, prenom = ?, age = ?, date_naissance = ?, email = ?, ville = ? where id= ?");
$req->execute([
    $_POST['nom'], 
    $_POST['prenom'], 
    $_POST['age'], 
    $_POST['dateNaissance'], 
    $_POST['email'], 
    $_POST['ville'],
    $_POST['id']
    ]);
header('Location: ../../templates/listeEleve.php');

?>