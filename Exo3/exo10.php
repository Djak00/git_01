<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo10</p>
<!-- <img src="" alt="" srcset="" width=20% height=10% /> -->
<h1>Peronnages :</h1>
<?php

$tabLuke = [

    "Nom" => "Luke",
    "img" => "player.png",
    "Age" => 27,
    "Sexe" => true,
    "Force" => "5",
    "Agilite" => "4"
];

$tabKaty = [
    "Nom" => "Katy",
    "img" => "playerF.png",
    "Age" => 22,
    "Sexe" => false,
    "Force" => "3",
    "Agilite" => "6"
];

$tabMarc = [
    "Nom" => "Marc",
    "img" => "playerM.png",
    "Age" => 33,
    "Sexe" => true,
    "Force" => "7",
    "Agilite" => "2"
];

$tabPersos = [$tabLuke, $tabKaty, $tabMarc];


// echo "<img src='sources\images\player.png'>";
foreach ($tabPersos as $perso) {
    echo "<div class='gauche'>";
    echo "<img src='sources/images/" . $perso['img'] . "'>";
    echo "</div>";
    echo "<div class='gauche'>";
    affTab($perso);
    echo "</div>";
    echo "<div class='clearB'></div>";
}






function affTab($tab)
{
    foreach ($tab as $index => $value) {
        if ($index !== "img" && $index !== "Sexe") {
            echo "<b>" . $index . "</b> : " . $value . "<br/>";
        }
        if ($index === "Sexe") {
            echo "<b>Sexe</b> :";
            if ($value) {
                echo "Homme <br/>";
            } else {
                echo "Femme <br/>";
            }
        }
    }
}

?>

<?php
include("common/footer.php");
?>