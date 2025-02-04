<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 4 - La Programmation Orientée Objet (POO)"; //Mettre le nom du titre de la page que vous voulez
require_once("class/old05_Arme.class.php");
?>

<!-- mettre ici le code -->

<?php
$arme1 = new Arme("épée", "epee/epee1.png", "Une arme tranchante");
$arme2 = new Arme("arc", "arc/arc1.png", "Une arme à distance");
$arme3 = new Arme("hache", "hache/hache1.png", "Une arme tranchante ou un outil qui permet de couper du bois");
$arme4 = new Arme("fléau", "fleau/fleau1.png", "Une arme contondante du moyen age");


$tabArmes = [
    $arme1,
    $arme2,
    $arme3,
    $arme4
];
foreach ($tabArmes as $key => $arme) {
    echo "<div class='row align-items-center'>";
    echo "<div class='col-3 text-center'>";
    echo "<img src='sources/" . $arme->getImageArme() . "'><br/>";
    echo "</div>";
    echo "<div class='col-auto '>";
    echo "<h4>" . $arme->getNomArme() . "</h4>";
    echo "<p>" . $arme->getDescriptionArme() . "</p>";
    echo "</div>";
    echo "</div>";
}

?>





<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>