<?php
require_once './partials/_head.php';
require_once './partials/_navBar.php'

?>

<form action="../src/controller/ajouterEleveController.php" method="post" enctype="multipart/form-data" class="p-2 m-5">
    <h1 class="fontTheme">Ajouter un élève</h1>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom de l'élève : </label>
        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomEleve" required placeholder="Nom de l'élève">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom de l'élève : </label>
        <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="Prénom de l'élève">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age de l'élève : </label>
        <input type="number" class="form-control" id="age" name="age" required placeholder="Age de l'élève">
    </div>
    <div class="mb-3">
        <label for="dateNaissance" class="form-label">Date de naissance de l'élève : </label>
        <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" required placeholder="Date de naissance de l'élève">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email de l'élève : </label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Email de l'élève">
    </div>
    <div class="mb-3">
        <label for="ville" class="form-label">Ville de l'élève : </label>
        <input type="text" class="form-control" id="ville" name="ville" required placeholder="Ville de l'élève">
    </div>
    <input type="submit" class="btn btn-primary" value="Valider l'inscription">
</form>
<?php
require_once './partials/_footer.php';
?>