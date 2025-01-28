<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php



$nbrRand = rand(1, 20);
$i = 0;


while ($nbrRand < 14) {

    $i++;
    $nbrRand = rand(1, 20);
    if ($nbrRand < 14) {
        echo "Essaie " . $i . " : " . $nbrRand . " est trop petit (<15)" . " <br/>";
    } else {


        echo "Essaie " . $i . " : " . $nbrRand . " est = ou > à 15" . " <br/>";
    }
}



echo "<br/>" . "Le dernier nombre random est : " . $nbrRand;

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>