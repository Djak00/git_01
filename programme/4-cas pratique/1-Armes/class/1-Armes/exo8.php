<?php
ob_start(); //NE PAS MODIFIER 
$titre = "Partie 8 - Finalisation avec les sessions"; //Mettre le nom du titre de la page que vous voulez
require_once("class/Arme.class.php");

?>

<!-- mettre ici le code -->

<?php
$arme1 = new Arme("épée", "Une arme tranchante", 5);
$arme2 = new Arme("arc", "Une arme à distance", 2);
$arme3 = new Arme("hache", " un outil qui permet de couper du bois", 5);
$arme4 = new Arme("fléau", "Une arme contondante du moyen age", 5);
$tabArmes = [
    $arme1,
    $arme2,
    $arme3,
    $arme4
];


echo $arme1;
echo $arme2;
echo $arme3;
echo $arme4;













?>
<!-- <form action="" method="get">
<select name="" id="">
    <option value=""></option>
</select>
</form> -->




<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>