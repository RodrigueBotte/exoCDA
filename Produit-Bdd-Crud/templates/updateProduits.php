<?php
require_once "../config/connexiondb.php";
require_once "./partials/_head.php";
require_once "./partials/_navBar.php";

$con = connectdb();
$data = null;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $idProduit = $_POST['id'];
    $result = $con->query("SELECT * FROM produits WHERE id = $idProduit");
    $data = $result->fetch();
}

?>
<?php if ($data): ?>
    <form action="../src/controller/updateProduitsController.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">

        <label for="nom">Nom du produit :</label>
        <input type="text" name="nom" id="nom" required value="<?php echo htmlspecialchars($data['nom']); ?>">

        <label for="image">image du produit :</label>
        <input type="hidden" name="imageActuelle" value="<?php echo htmlspecialchars($data['image']); ?>">
        <img src="../public/<?php echo htmlspecialchars($data['image']) ?>" alt="image du produit">
        <input type="file" name="nouvelleImage">

        <label for="prix">Prix du produit :</label>
        <input type="number" name="prix" id="prix" value="<?php echo htmlspecialchars($data['prix']); ?>">

        <input type="submit" value="Mettre à jour le produit">

    </form>
<?php else: ?>
    <p>Produit non trouvé</p>
<?php endif ?>