<?php
require_once './partials/_head.php';
require_once './partials/_navBar.php'

?>

<h1>Ajouter un produit</h1>
<form action="../src/controller/addProduitsControler.php" method="post" enctype="multipart/form-data">
    <label for="nomProd">Nom du produit :</label>
    <input type="text" name="nomProd" id="nomProd" required placeholder="Nom du produit">
    
    <label for="image">Image :</label>
    <input type="file" name="image" id="image" required>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" id="prix" required placeholder="Prix du produit">

    <input type="submit" value="Ajouter">
</form>

<?php 
require_once './partials/_footer.php';
?>