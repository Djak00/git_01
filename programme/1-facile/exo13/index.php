<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Tableaux et fonctions "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php


$tabPierre = [5, 13, 9, 3];
// echo calculMoyenne($tabPierre);
echo "La moyenne des notes de <b>Pierre</b> est de : <b>" . calculMoyenne($tabPierre) . "<b/><br/>";


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