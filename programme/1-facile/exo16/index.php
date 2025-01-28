<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableaux de Tableaux associatifs "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$tabMatthieu = ['Nom' => 'Matthieu', 'Age' => 30, 'Sexe' => true];
$tabMarie = ['Nom' => 'Marie', 'Age' => 32, 'Sexe' => false];
$tabMac = ['Nom' => 'Marc', 'Age' => 25, 'Sexe' => true];
$tabMathilde = ['Nom' => 'Mathilde', 'Age' => 21, 'Sexe' => false];
$tabAll = [$tabMatthieu, $tabMarie, $tabMac, $tabMathilde];

voirTtabab($tabAll);

function voirTtabab($tabs)
{

    foreach ($tabs as $key => $tab) {
        foreach ($tab as $key => $value) {
            echo $key . " : " . $value . "<br/>";
        }
        echo "-------------------------<br/>";
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