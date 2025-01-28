<?php
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/class_monPDO.php");
require_once("class/manager_fruit.php");
include("common/header.php");
include("common/menu.php");
?>
<div class="container">
    <h2 class=" perso_backgroundColorBlueLight text-white p-2 mt-2 rounded-lg border border-dark ">Fruits : </h2>



    <?php




    managerFruit::setFruitsFromDB2();
    echo '<div class="row mx-auto">';






    foreach (fruit::$fruits as $fruit) {
        echo '<div class=" col-12 p-2 " style=width:210px >';
        echo $fruit->afficherListeFruit();
        echo '</div>';
    }

    echo '</div>';



    // juste pr test ma function

    // $fruits01 = "pomme3";
    // var_dump(managerFruit::getPanierFromFruit($fruits01));

    // Fruit à rechercher dans la base de données
    // $nomFruit = "cerise_12";

    // try {
    //     // Appel de la fonction
    //     $client = managerFruit::getPanierFromFruit($nomFruit);

    //     // Affichage du résultat
    //     if ($client) {
    //         echo "Le fruit '$nomFruit' est associé au client/panier : $client";
    //     } else {
    //         echo "Aucun panier trouvé pour le fruit '$nomFruit'";
    //     }
    // } catch (Exception $e) {
    //     echo "Erreur : " . $e->getMessage();
    // }
    ?>








</div>
<?php
include("common/footer.php");
?>