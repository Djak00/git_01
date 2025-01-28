<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php



$table = rand(1, 10);

echo "Calcul de la table de : " . $table . "<br/>";

echo Table($table);

function Table($table)
{
    for ($i = 0; $i < 10; $i++) {
        $resulta = $i * $table;
        echo $i . " * " . $table . " = " . $resulta . "<br/>";
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