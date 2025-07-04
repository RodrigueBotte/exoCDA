<?php
require_once __DIR__."/../config/connexionPdo.php";
require_once "./partials/_head.php";
require_once  "./partials/_navBar.php";

$con = connectionDb();
$data = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idEleve = $_POST['id'];
    $result = $con->prepare("SELECT * FROM stagiaire where id = ?");
    $result->execute([$idEleve]);
    $data = $result->fetch();
}
?>
<form action="../src/controller/modifierEleveController.php" method="post" enctype="multipart/form-data" class="p-2 m-3">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
    <h1 class="fontTheme">Modifier les informations d'un élève</h1>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom de l'élève : </label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomEleve" required value="<?php echo htmlspecialchars($data['nom']); ?>">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom de l'élève : </label>
        <input type="text" class="form-control" id="prenom" name="prenom" required value="<?php echo htmlspecialchars($data['prenom']); ?>">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age de l'élève : </label>
        <input type="number" class="form-control" id="age" name="age" required value="<?php echo htmlspecialchars($data['age']); ?>">
    </div>
    <div class="mb-3">
        <label for="dateNaissance" class="form-label">Date de naissance de l'élève : </label>
        <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" required value="<?php echo htmlspecialchars($data['date_naissance']); ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email de l'élève : </label>
        <input type="email" class="form-control" id="email" name="email" required value="<?php echo htmlspecialchars($data['email']); ?>">
    </div>
    <div class="mb-3">
        <label for="ville" class="form-label">Ville de l'élève : </label>
        <input type="text" class="form-control" id="ville" name="ville" required value="<?php echo htmlspecialchars($data['ville']); ?>">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider la modification">
</form>