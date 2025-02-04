<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - Tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez

?>

<!-- mettre ici le code -->

<?php
// $arme1 = "épée";
// $arme2 = "arc";
// $arme3 = "hache";
// $arme4 = "fléau";
$arme1 = [
    "Nom" => "épée",
    "Image" => "epee1.png",
    "Déscription" => "Une arme tranchante"
];
$arme2 = [
    "Nom" => "arc",
    "Image" => "arc1.png",
    "Déscription" => "Une arme à distance"
];
$arme3 = [
    "Nom" => "hache",
    "Image" => "hache1.png",
    "Déscription" => "Une arme tranchante ou un outil qui permet de couper du bois"
];
$arme4 = [
    "Nom" => "fléau",
    "Image" => "fleau1.png",
    "Déscription" => "Une arme contondante du moyen age"
];


$tabArmes = [
    $arme1,
    $arme2,
    $arme3,
    $arme4
];
// echo $arme1["Image"];
?>

<div>
    <b>Voici les armes : </b>
</div>



<?php
foreach ($tabArmes as $key => $arme) {
    $dossierArme = substr($arme["Image"], 0, strlen($arme["Image"]) - 5);
    echo "<div class='row align-items-center'>";
    echo "<div class='col-3 text-center'>";
    echo "<img src='sources/" . $dossierArme . "/" . $arme["Image"] . "'><br/>";
    echo "</div>";
    echo "<div class='col-auto '>";
    echo "<h4>" . $arme["Nom"] . "</h4>";
    echo "<p>" . $arme["Déscription"] . "</p>";
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