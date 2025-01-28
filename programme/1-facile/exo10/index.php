<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les function 2 "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$mot = "Coucou";

echo $mot . " sans voyelle est : " . suprVoyelles($mot);

function suprVoyelles($mot)
{
    $voyelles = ["a", "e", "i", "o", "u", "y",];
    $resultat = str_replace($voyelles, "", $mot);
    return $resultat;
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