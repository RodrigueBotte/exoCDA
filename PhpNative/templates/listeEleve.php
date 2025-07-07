<?php
require_once __DIR__ . '/../src/controller/eleveController.php';
require_once './partials/_head.php';
require_once './partials/_navBar.php';

?>
<div class="container d-flex flex-column align-items-center justify-content-center p-15 gap-25">
    <h1 class="fontTheme">Liste des élèves</h1>
    <div class="row row-cols-3 gap-5">
        <?php
        if (isset($lignes) && is_array($lignes)) {
            foreach ($lignes as $ligne) {
                echo
                    '
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">' . $ligne['nom'] . '</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">' . $ligne['prenom'] . '</h6>
                                <p class="card-text">Age : ' . $ligne['age'] . '</p>
                                <p class="card-text">Date de naissance : ' . date("d/m/Y", strtotime($ligne['date_naissance']) ) . '</p>
                                <p class="card-text">Email :<br> ' . $ligne['email'] . '</p>
                                <p class="card-text">Ville : ' . $ligne['ville'] . '</p>
                                <div class="d-flex flex-row justify-content-around">
                                    <form action="modifierEleve.php" method="post">
                                        <input type="hidden" name="id" value="' .$ligne['id']. '">
                                        <input class="btn btn-outline-success my-1" type="submit" value="Modifier">
                                    </form>
                                    <form action="../src/controller/supprimerEleveController.php" method="post" onSubmit="confirmerSuppression(event)">
                                        <input type="hidden" name="id" value="' .$ligne['id']. '">
                                        <input class="btn btn-outline-danger my-1" type="submit" value="Supprimer">
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
            }
        }
        ?>
    </div>
    
</div>

<?php require './partials/_footer.php'; ?>