<?php
require_once '../../config/connexionPdo.php';

$con = connectionDb();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idEleve = $_POST['id'];
    $req = $con->prepare('DELETE FROM stagiaire WHERE id = ?');
    $req->execute([$idEleve]);
    header("Location: ./listeEleve.php");
}

?>