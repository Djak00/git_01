<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$tabHomme = ["Mathieu", "Pierre", "Marc", "Jean",];

echo "<pre>";
var_dump($tabHomme);
print_r($tabHomme);
echo "<pre/>";

foreach ($tabHomme as $key => $value) {
    echo $key . " : " . $value . "<br/>";
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