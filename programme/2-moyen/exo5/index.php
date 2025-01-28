<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private & Getters"; //Mettre le nom du titre de la page que vous voulez
require_once("class/livre.class.php");
?>
<?php
$livre1 = new livre("asterix", "larousse", "toto", 2000);
$livre2 = new livre("tintin", "larousse", "tata", 2001);
$livre3 = new livre("rahan", "petit robert", "tutu", 2000);
$livre4 = new livre("dbz", "petit robert", "titi", 2001);
$livres = [$livre1, $livre2, $livre3, $livre4];


?>
<!-- mettre ici le code -->
<form action="#" method="POST">
    <div class="mb-3">
        <label for="selectEdition" class="form-label">Edition : </label>
        <select name="selectEdition" id="selectEdition">
            <option value="tous">Tous</option>
            <option value="larousse"
                <?php if (isset($_POST["selectEdition"]) && $_POST["selectEdition"] === "larousse") echo "selected"; ?>>
                Larousse
            </option>
            <option value="petit robert"
                <?php if (isset($_POST["selectEdition"]) && $_POST["selectEdition"] === "petit robert") echo "selected"; ?>>
                Petit robert</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="selectDateDeParution" class="form-label">Date de parution : </label>
        <select name="selectDateDeParution" id="selectDateDeParution">
            <option value="tous">Tous</option>
            <option value="2000"
                <?php if (isset($_POST["selectDateDeParution"]) && $_POST["selectDateDeParution"] == 2000) echo "selected"; ?>>
                2000</option>
            <option value="2001"
                <?php if (isset($_POST["selectDateDeParution"]) && $_POST["selectDateDeParution"] == 2001) echo "selected"; ?>>
                2001</option>
        </select>
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="Valider">
    </div>
</form>
<?php

// echo "-----------------<br/>";
// foreach ($livres as $key => $livre) {
//     switch (isset($_POST["selectEdition"]) or isset($_POST["selectDateDeParution"])) {
//         case $livre->getEdition() === $_POST["selectEdition"] && $_POST["selectDateDeParution"] == "tous":
//             echo $livre;
//             echo "-----------------<br/>";
//             break;
//         case $livre->getDate() == $_POST["selectDateDeParution"] && $_POST["selectEdition"] == "tous":
//             echo $livre;
//             echo "-----------------<br/>";
//             break;
//         case $livre->getEdition() === $_POST["selectEdition"] && $livre->getDate() == $_POST["selectDateDeParution"]:
//             echo $livre;
//             echo "-----------------<br/>";
//             break;
//         case $_POST["selectEdition"] == "tous" && $_POST["selectDateDeParution"] == "tous":
//             echo $livre;
//             echo "-----------------<br/>";
//             break;

//         default:
//             echo "";
//             break;
//     }
// }

//Livre::affichAllLivres($livres);
//Livre::getParDateDeParutionEtEdition($livres, "larousse", 2000);

if (
    isset($_POST["selectEdition"]) && !empty($_POST["selectEdition"]) &&
    isset($_POST["selectDateDeParution"]) && !empty($_POST["selectDateDeParution"])
) {
    Livre::getParDateDeParutionEtEdition($livres, $_POST["selectEdition"], $_POST["selectDateDeParution"]);
} else {
    Livre::affichAllLivres($livres);
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