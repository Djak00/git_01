<?php
// Inclusion des fichiers nécessaires
include("common/header.php");
include("common/menu.php");
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/class_monPDO.php");
require_once("class/manager_fruit.php");
require_once("class/manager_panier.php");

?>
<div class="container">

    <h2>Fruits :</h2>

    <?php


    if (isset($_POST["modifPoidPrix"]) && $_POST["type"] === "modification") {
        $idFruitPrModif = $_POST["modifPoidPrix"];
        $poidFruitPrModif = (int)$_POST["modifPoid"];
        $prixFruitPrModif = (int)$_POST["modifPrix"];
        $res = managerFruit::modifFruitDB($idFruitPrModif, $poidFruitPrModif, $prixFruitPrModif);
        if ($res) {
            echo '<div class="alert alert-success" role="alert">Modiffication faite !!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Modiffication non faite !!</div>';
        }
    } else  if (isset($_POST["modifPoidPrix"]) && $_POST["type"] === "suppression") {

        $idFruitPrSupr = $_POST["modifPoidPrix"];
        $res = managerFruit::suprFruitDB($idFruitPrSupr);

        if ($res) {
            echo '<div class="alert alert-success" role="alert">Supression faite !!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Supression non faite !!</div>';
        }
    }

    // if (isset($_POST["suprPanier"])) {
    //     $idPanier = (int)$_POST["idPanierAsupr"];
    //     managerpanier::suprPanierFromDB($idPanier);
    // }



    // 1. Récupère les paniers depuis la base de données
    managerPanier::setPaniersFromDB();

    // 2. Parcourt tous les paniers récupérés
    foreach (Panier::$paniers as $panier) {
        // Ajoute les fruits de la base de données dans les paniers respectifs
        $panier->addFruitToPanierFromDB();

        // Affiche le contenu du panier grâce à la méthode __toString()
        echo $panier;
    }







    ?>


</div>
<?php
// Inclusion du pied de page
include("common/footer.php");
?>