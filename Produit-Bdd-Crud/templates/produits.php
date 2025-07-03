<?php 
require '../src/controller/produitsController.php';
require './partials/_head.php';
require './partials/_navBar.php';

?>

<div class="container mt-4">
<h1 class="text-center">Produits</h1>
<table class="table border table-striped">
    <thead>
        <tr>
            <th class="border text-center">N° de produit</th>
            <th class="border text-center">Nom du produit</th>
            <th class="border text-center">Image</th>
            <th class="border text-center">Prix</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // boucle foreach pour afficher chaque ligne de la requête
    if (isset($lignes) && is_array($lignes)) {
        foreach ($lignes as $ligne) {
            echo 
                '<tr>
                    <td class="border align-middle text-center">' . $ligne['id'] . '</td>
                    <td class="border align-middle text-center">' . $ligne['nom'] . '</td>
                    <td class="border align-middle text-center"><img class="img-fluid" src="../public/imageBdd/' . basename($ligne['image']) . '" alt="' . $ligne['nom'] . '"></td>
                    <td class="border align-middle text-center">' . $ligne['prix'] . ' €</td>
                    <td class="border align-middle text-center">
                        <form action="updateProduits.php" method="post">
                            <input type="hidden" name="id" value="' . $ligne['id'] . '">
                            <input class="btn btn-outline-success my-1" type="submit" value="Modifier">
                        </form>
                        <form action="../src/controller/deleteProduitController.php" method="post" onsubmit="confirmerSuppression(event)">
                            <input type="hidden" name="id" value="' . $ligne['id'] . '">
                            <input class="btn btn-outline-danger my-1" type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>';
        }
    }
    ?>
    </tbody>
</table>
    <div class="my-4">
    <a href="addProduits.php"><button class="btn btn-outline-primary mx1">Ajouter</button></a>
 </div>
</div>
<script src="../public/js/delete.js"></script>