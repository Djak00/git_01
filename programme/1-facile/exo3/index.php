<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->



<?php

$chiffre = random_int(0, 20);



echo "<h1>Le chiffre est : " . $chiffre . "</h1>";



// echo ($chiffre < 6) ?  "Il est compris entre 1 et 5" : "ok";



if ($chiffre < 6) {
    echo "Il est compris entre 1 et 5";
} elseif ($chiffre < 11) {
    echo "Il est compris entre 6 et 10";
} elseif ($chiffre < 16) {
    echo "Il est compris entre 11 et 15";
} else {
    echo "Il est compris entre 16 et 20";
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