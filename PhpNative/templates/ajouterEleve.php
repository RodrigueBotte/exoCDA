<?php
require_once './partials/_head.php';
require_once './partials/_navBar.php'

?>

<h1>Ajouter un élève</h1>
<form action="../src/controller/ajouterEleveController.php" method="post" enctype="multipart/form-data" class="p-5 m-0">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom de l'élève : </label>
        <input type="text" class="form-control" id="nom" aria-describedby="nomEleve">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom de l'élève : </label>
        <input type="text" class="form-control" id="prenom">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age de l'élève : </label>
        <input type="number" class="form-control" id="age">
    </div>
    <div class="mb-3">
        <label for="dateNaissance" class="form-label">Date de naissance de l'élève : </label>
        <input type="date" class="form-control" id="dateNaissance">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email de l'élève : </label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="ville" class="form-label">Ville de l'élève : </label>
        <input type="text" class="form-control" id="ville">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
require_once './partials/_footer.php';
?>