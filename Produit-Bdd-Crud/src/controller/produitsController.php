<?php
require_once __DIR__.'../../../config/connexiondb.php';

$con = connectdb();
$req = "SELECT * from produits";
$response = $con->query($req);
$lignes = $response->fetchAll();

?>