<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut Statique"; //Mettre le nom du titre de la page que vous voulez
include_once("class/maison.class.php");
?>

<!-- mettre ici le code -->

<?php
echo "<pre>";
$maison4 = new Maison(2018, 3, 98);
$maison2 = new Maison(2019, 4, 120);
$maison6 = new Maison(2017, 4, 130);




Maison::afficheMaisonsDansTab();

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>