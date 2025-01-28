<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<a href="?type=tous" class="btn btn-primary ">tous</a>
<a href="?type=chats" class="btn btn-primary ">chats</a>
<a href="?type=chiens" class="btn btn-primary ">chiens</a><br />
<!-- <button type="submit" name="">ok</button> -->
<?php
require_once("class/animaux.class.php");

$animale1 = new Animale("Mina", 2, "chien");
$animale2 = new Animale("Tya", 7, "chat");
$animale3 = new Animale("Milo", 4, "chat");
$animale4 = new Animale("Hocket", 6, "chien");


$tableaux = [$animale1, $animale2, $animale3, $animale4];

if (isset($_GET["type"]) && $_GET["type"] === "chats") {
    affichTabParType("chat");
} elseif (isset($_GET["type"]) && $_GET["type"] === "chiens") {
    affichTabParType("chien");
} else {
    affichTableaux();
}




function affichTableaux()
{
    global $tableaux;
    echo "---------------------------<br/>";
    foreach ($tableaux as  $tabAnimale) {
        echo "Nom : " . $tabAnimale->nom;
        echo "<br/>";
        echo "Age : " . $tabAnimale->age;
        echo "<br/>";
        echo "Type : " . $tabAnimale->type;
        echo "<br/>";
        echo "---------------------------<br/>";
    }
}


function affichTabParType($type)
{
    global $tableaux;
    echo "---------------------------<br/>";
    foreach ($tableaux as  $tabAnimale) {
        if ($tabAnimale->type === $type) {
            echo "Nom : " . $tabAnimale->nom;
            echo "<br/>";
            echo "Age : " . $tabAnimale->age;
            echo "<br/>";
            echo "Type : " . $tabAnimale->type;
            echo "<br/>";
            echo "---------------------------<br/>";
        }
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