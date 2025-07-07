<?php
require_once __DIR__.'/../../config/connexionPdo.php';
$co = connectionDb();
$req = "SELECT * from stagiaire";
$resp = $co->query($req);
$lignes = $resp->fetchAll();

?>