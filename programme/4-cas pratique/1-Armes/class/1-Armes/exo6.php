<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 6 - Amélioration de la Classe"; //Mettre le nom du titre de la page que vous voulez
require_once("class/old06_Arme.class.php");
?>

<!-- mettre ici le code -->

<?php
$arme1 = new Arme("épée", "Une arme tranchante");
$arme2 = new Arme("arc", "Une arme à distance");
$arme3 = new Arme("hache", " un outil qui permet de couper du bois");
$arme4 = new Arme("fléau", "Une arme contondante du moyen age");



$tabArmes = [
    $arme1,
    $arme2,
    $arme3,
    $arme4
];

$arme3->setLvlArme(3);



foreach ($tabArmes as  $arme) {
    echo $arme;
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