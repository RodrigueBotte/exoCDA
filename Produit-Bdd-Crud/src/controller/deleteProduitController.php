<?php
require_once '../../config/connexiondb.php';

$con = connectdb();
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id'])) {
    $idProduits = $_POST['id'];
    $req = $con->prepare("SELECT image FROM produits WHERE id = ?");
    $req->execute([$idProduits]);
    $result = $req->fetch();
    if ($result) {
        $cheminImage = '../public/images/' . basename($result['image']);
        if (file_exists($cheminImage)) {
            unlink($cheminImage); // Supprimer l'image du produit
        }
        $req = $con->prepare("DELETE FROM produits WHERE id = ?");
        $req->execute([$idProduits]);
        header("Location: ../../templates/produits.php");
        exit;
    } else {
        echo "Erreur : le produit ou l'image n'existe pas.";
    }
}
?>
?>