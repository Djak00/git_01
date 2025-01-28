<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests 2"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<h1></h1>
<?php

$nombre1 = rand(1, 100);
$nombre2 = rand(1, 100);
$resultat = abs($nombre1 - $nombre2);

echo "Chiffre 1 : <b>  " . $nombre1 . "  </b>";
echo "<br/>";
echo "Chiffre 2 : <b>  " . $nombre2 . "  </b>";
echo "  <br>";

echo $resultat;
echo "  <br>";
if ($resultat < 76 && $resultat > 24) {
    echo "  ok";
} else {
    echo "  ko";
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