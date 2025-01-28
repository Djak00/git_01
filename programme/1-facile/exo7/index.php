<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Le Switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$moisRand = rand(1, 12);
$mois = "";

switch ($moisRand) {
    case '1':
        $mois = "Janvier";
        break;
    case '2':
        $mois = "Février";
        break;
    case '3':
        $mois = "Mars";
        break;
    case '4':
        $mois = "Avril";
        break;
    case '5':
        $mois = "Mai";
        break;
    case '6':
        $mois = "Juin";
        break;
    case '7':
        $mois = "Juillet";
        break;
    case '8':
        $mois = "Aout";
        break;
    case '9':
        $mois = "Septembre";
        break;
    case '10':
        $mois = "Octobre";
        break;
    case '11':
        $mois = "Novembre";
        break;
    case '12':
        $mois = "Décembre";
        break;

    default:
        echo "rien";
        break;
}

echo "le : " . $moisRand . " correspond à " . $mois . " ";

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>