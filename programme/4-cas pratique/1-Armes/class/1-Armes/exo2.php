<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 2 - Tableaux"; //Mettre le nom du titre de la page que vous voulez

?>

<!-- mettre ici le code -->

<?php
// $arme1 = "épée";
// $arme2 = "arc";
// $arme3 = "hache";
// $arme4 = "fléeau";

$tabArmes = [
    "Arme 1" => "épée",
    "Arme 2" => "arc",
    "Arme 3" => "hache",
    "Arme 4" => "fléau"
];

?>
<div>
    <b>Voici les armes dans un tableau PHP : </b>
</div>

<p>
    Arme 1 : <?= $tabArmes["Arme 1"]; ?><br>
    Arme 2 : <?= $tabArmes["Arme 2"]; ?><br>
    Arme 3 : <?= $tabArmes["Arme 3"]; ?><br>
    Arme 4 : <?= $tabArmes["Arme 4"]; ?><br>
</p>
<div>
    <b>Affichage dans une boucle for : </b>
</div>

<?php

for ($i = 1; $i < count($tabArmes) + 1; $i++) {
    echo "Arme " . $i . " : " . $tabArmes["Arme $i"] . "<br/>";
}
echo "<br/>";
?>

<div>
    <b>Affichage dans une boucle foreach : </b>
</div>

<?php

foreach ($tabArmes as $key => $arme) {
    echo $key . " : " . $arme . "<br/>";
}
echo "<br/>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>