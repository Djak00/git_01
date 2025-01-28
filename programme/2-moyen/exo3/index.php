<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<a href="?type=tous" class="btn btn-primary ">tous</a>
<a href="?type=chats" class="btn btn-primary ">chats</a>
<a href="?type=chiens" class="btn btn-primary ">chiens</a><br />
<!-- <button type="submit" name="">ok</button> -->
<?php
$tableau1 = [
    "nom" => "Mina",
    "age" => 2,
    "type" => "chien"
];

$tableau2 = [
    "nom" => "Tya",
    "age" => 7,
    "type" => "chat"
];

$tableau3 = [
    "nom" => "Milo",
    "age" => 4,
    "type" => "chat"
];

$tableau4 = [
    "nom" => "Hocket",
    "age" => 6,
    "type" => "chien"
];
$tableaux = [$tableau1, $tableau2, $tableau3, $tableau4];

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
    foreach ($tableaux as  $tab) {
        foreach ($tab as $key => $value) {
            echo $key . " - " . $value . "<br/>";
        }
        echo "---------------------------<br/>";
    }
}


function affichTabParType($type)
{
    global $tableaux;
    echo "---------------------------<br/>";
    foreach ($tableaux as  $tableau) {
        if ($tableau["type"] === $type) {
            foreach ($tableau as $key => $value) {
                echo $key . " - " . $value . "<br/>";
            }
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