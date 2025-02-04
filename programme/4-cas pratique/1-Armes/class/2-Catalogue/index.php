<?php ob_start(); //NE PAS MODIFIER 
$titre = "Un catalogue de produits"; //Mettre le nom du titre de la page que vous voulez
require_once("class/MonPdo.php");
?>

<!-- mettre ici le code -->

<?php

$req = "SELECT * FROM table_produits_cours";
$stmt = $pdo->prepare($req);
$stmt->execute();
$cours = $stmt->fetchAll(PDO::FETCH_ASSOC);

$req2 = "SELECT * FROM table_types_de_cours";
$stmt = $pdo->prepare($req2);
$stmt->execute();
$types = $stmt->fetchAll(PDO::FETCH_ASSOC);








echo '<div class="row no-guetters" >';
    foreach ($cours as $key => $cour) {
        foreach ($types as $key => $type) {
            if ($cour["fk_id_type"] == $type["id_type"]) {
                $res = $type["nom_type"];
            }
        }
        echo '<div class="col-4 d-flex align-items-stretch p-2">';
            echo '<div class= "card w-100"  style="">';
                echo '<img src="source/' . $cour["image_cours"] . '" class="card-img-top" alt="...">';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $cour["nom_cours"] . '</h5>';
                        echo ' <p class="card-text">' . $cour["description_cours"] . '</p>';
                        echo '<span class="badge badge-primary">' . $res . '</span>';
                    echo '</div>';
            echo '</div>';
        echo '</div>';
    }
echo '</div>';

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>