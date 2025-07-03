<?php
require_once __DIR__ . '/../../config/connexiondb.php';

$con = connectdb();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $idProduit = $_POST['id'];
    $nomProduit = strip_tags($_POST['nom']);
    $prixProduit = strip_tags($_POST['prix']);
    $imageProduit = isset($_POST['imageActuelle']) ? $_POST['imageActuelle'] : null;

    if (isset($_FILES['nouvelleImage']) && $_FILES['nouvelleImage']['error'] == 0) {
        if (file_exists($imageProduit)) {
            unlink($imageProduit);
        }
        $dossierCible = __DIR__ . '/../../public/imageBDD/';
        $fichierCible = $dossierCible . basename($_FILES['nouvelleImage']['name']);
        if (move_uploaded_file($_FILES['nouvelleImage']['tmp_name'], $fichierCible)) {
            $imageProduit = $fichierCible;
        }
    }
    $req = $con->prepare("UPDATE produits SET nom = ?, prix = ?, image = ? where id = ? ");
    $req->execute([$nomProduit, $prixProduit, $imageProduit, $idProduit]);
    header('Location: ../../templates/produits.php');
}
