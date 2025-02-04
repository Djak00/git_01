<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 5 - Amélioration de la Classe"; //Mettre le nom du titre de la page que vous voulez
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

$randArme1 = rand(1, 5);
$randArme2 = rand(1, 2);
$randArme3 = rand(1, 5);
$randArme4 = rand(1, 5);
$arme1->setImageArme("epee/epee" . $randArme1 . ".png");
$arme2->setImageArme("arc/arc" . $randArme2 . ".png");
$arme3->setImageArme("hache/hache" . $randArme3 . ".png");
$arme4->setImageArme("fleau/fleau" . $randArme4 . ".png");


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