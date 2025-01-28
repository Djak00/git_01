<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Boucle for 2"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$nbrRand = 7;
echo "<h1>Voici le cumul des " . $nbrRand . " premiers nombres (sens inverse)<br></h1>";

$res = 0;


for ($i = $nbrRand; $i >= 1; $i--) {
    $res = $res + $i;
    echo "<br>Etape : " . (abs($i - ($nbrRand + 1))) . " - résultat = " . $res . "<br/>";
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