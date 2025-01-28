<?php
include("common/header.php");
include("common/menu.php");
?>



<p>info : exo9 liste deroulante garder le nom select (_echo "selected"_)
    et selection sans bouton (_onchange="submit()_)</p>



<h1>Selection du personnage</h1>

<form action="#" method="post">
    <label for="listePerso">Personnage : </label>
    <select name="listePerso" id="listePerso" onchange="submit()">
        <option value="Luke" <?php if (isset($_POST["listePerso"]) && $_POST["listePerso"] === "Luke") echo "selected"; ?>>Luke</option>
        <option value="Katy" <?php if (isset($_POST["listePerso"]) && $_POST["listePerso"] === "Katy") echo "selected"; ?>>Katy</option>
        <option value="Marc" <?php if (isset($_POST["listePerso"]) && $_POST["listePerso"] === "Marc") echo "selected"; ?>>Marc</option>
    </select>
    <!-- <input type="submit" value="Choisir"> -->
</form>

<h2>Personnage :</h2>

<?php

$tabLuke = [
    "Nom" => "<b>Luke</b>",
    "Age" => 27,
    "Sexe" => "Homme",
    "Force" => 5,
    "Agilité" => 4
];
$tabKaty = [
    "Nom" => "<b>Katy</b>",
    "Age" => 22,
    "Sexe" => "Femme",
    "Force" => 3,
    "Agilité" => 6
];
$tabMarc = [
    "Nom" => "<b>Marc</b>",
    "Age" => 33,
    "Sexe" => "Homme",
    "Force" => 7,
    "Agilité" => 2
];

if (!isset($_POST["listePerso"]) || $_POST["listePerso"] === "Luke") {
    echo "<div class='gauche'>";
    echo "<img src =\"sources\images\player.png\" alt =\"image luke\"/>";
    echo "</div>";
    echo "<div class='gauche'>";
    affTab($tabLuke);
    echo "</div>";
} elseif (isset($_POST["listePerso"]) && $_POST["listePerso"] === "Katy") {
    echo "<div class='gauche'>";
    echo "<img src =\"sources\images\playerF.png\" alt =\"image katy\"/>";
    echo "</div>";
    echo "<div class='gauche'>";
    affTab($tabKaty);
    echo "</div>";
} elseif (isset($_POST["listePerso"]) && $_POST["listePerso"] === "Marc") {
    echo "<div class='gauche'>";
    echo "<img src =\"sources\images\playerM.png\" alt =\"image marc\"/>";
    echo "</div>";
    echo "<div class='gauche'>";
    affTab($tabMarc);
    echo "</div>";
}
echo "<div class='clearB'></div>";

function affTab($tab)
{
    foreach ($tab as $key => $value) {
        echo    $key . " : " . $value . "<br/>";
    }

    // echo $tab["Nom"];
}

?>


<?php
include("common/footer.php");
?>