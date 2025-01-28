<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et Ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$nom = "Marie";
$age = 30;
$homme = false;

$nom1 = [
    "nom" => "Marie",
    "age" => 30,
    "homme" => false
];

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;

$nom2 = [
    "nom" => "Pierre",
    "age" => 32,
    "homme" => true
];

Bonjour($nom1);

Bonjour($nom2);


function Bonjour($nom)
{
    echo "<br/>";
    if ($nom["homme"]) {
        $nom["homme"] = "un homme";
    } else {
        $nom["homme"] = "une femme";
    }
    echo $nom["nom"] . " à " . $nom["age"] . " ans et c'est  " . $nom["homme"] . ".";
    echo "<br/>";
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