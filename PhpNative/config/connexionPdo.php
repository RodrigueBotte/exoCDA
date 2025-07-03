<?php

function connectionDb(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $nameDb = 'pierre_sofip';

    try {
        $con = new PDO('mysql:host='.$server.';dbname='.$nameDb, $user, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $e) {
        echo 'N° : '.$e->getCode().'<br>';
        die('Erreur : '.$e->getMessage().'<br>');
    }
}
?>