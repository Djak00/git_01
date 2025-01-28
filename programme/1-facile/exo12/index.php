<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux 2"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$tabMarc = [12, 15, 13, 7, 18];
$res = 0;

foreach ($tabMarc as $key  => $value) {
    $res += $value;
}
echo "La moyenne des notes de <b>Marc</b> est de : " . ($res / ($key + 1));

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>