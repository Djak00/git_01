<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableau de Tableaux "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$tabMarc = [12, 15, 13, 7, 18];
$tabMathieu = [11, 14, 10, 4, 20, 8, 2];
$tabPierre = [5, 13, 9, 3];
$tabPaul = [6, 11, 15, 2];
$tabEleves = [$tabMarc, $tabMathieu, $tabPierre, $tabPaul];

foreach ($tabEleves as $key => $value) {
    echo "La moyenne des notes de <b>" . ($key + 1) . "</b> est de : <b>" . calculMoyenne($tabEleves[$key]) . "</b><br/>";
}







function calculMoyenne($tabDesNotes)
{
    $resulstat = 0;
    foreach ($tabDesNotes as $index => $note) {
        $resulstat += $note;
    }

    $resulstat = $resulstat / count($tabDesNotes);
    return $resulstat;
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