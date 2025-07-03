<?php
require_once '../../config/connexionPdo.php';
$co = connectionDb();
$req = "SELECT * from stagiaire";
$resp = $co->query($req);
$lignes = $resp->fetchAll();

?>