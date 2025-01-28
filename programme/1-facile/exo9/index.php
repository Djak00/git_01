<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les function "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$a = 5;
$b = 122;


if (nbrPair($a)) {
    echo "non paire";
} else {
    echo "nombre paire";
}
echo "<br/>";

echo (nbrPair($b)) ? "c'est ok pour le chiffre " . $b . "" : "c'est pas ok";


function nbrPair($nombre)
{
    $res = $nombre % 2;
    if ($res === 1 or $res === 0) {
        return true;
    } else {
        return false;
    }
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