<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
include_once("function.php");
$tableau1 = [2, 6, 10, 20, 9, 14];
$tableau2 = [4, 8, 2, 26, 18, 14];




?>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Tableau 1 : </h1>
            <?php afficherTableau($tableau1); ?><br />
            <?php calculerMoyenne($tableau1); ?><br />
            <?php if (estTableauPair($tableau1)) {
                echo "Le tableau contient que des valeurs paires";
            } else {
                echo "Le tableau ne contient pas que des valeurs paires";
            } ?>
        </div>
        <div class="col">
            <h1>Tableau 2 : </h1>
            <?php afficherTableau($tableau2); ?><br />
            <?php calculerMoyenne($tableau2); ?><br />
            <?php if (estTableauPair($tableau2)) {
                echo "Le tableau contient que des valeurs paires";
            } else {
                echo "Le tableau ne contient pas que des valeurs paires";
            } ?>
        </div>

    </div>
    <?php
    /************************
     * NE PAS MODIFIER
     * PERMET d INCLURE LE MENU ET LE TEMPLATE
     ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
    ?>