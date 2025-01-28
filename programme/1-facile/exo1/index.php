<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Inverser les valeurs de variables en PHP"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$a = 3;
$b = 5;
$c = 7;

echo "***************AVANT PERMUTATION*******************";
echo "</br>";
echo "A : " . $a;
echo "</br>";
echo "B : " . $b;
echo "</br>";
echo "C : " . $c;
echo "</br>";
echo "</br>";

if ($a === 3) {
    $a = 5;
    $b = 7;
    $c = 3;
}






echo "***************APRES PERMUTATION*******************";
echo "</br>";
echo "A : " . $a;
echo "</br>";
echo "B : " . $b;
echo "</br>";
echo "C : " . $c;
echo "</br>";



?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>