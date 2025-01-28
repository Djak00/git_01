<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo3</p>

<h1>Cercle - Périmètre et Aire</h1>

<!--    
Perimetre = 2 x rayon x π     
Aire = rayon au carré x π 
-->
<h2></h2>

<form action="#" method="GET">

    <label for="valeurRayon">Rayon d'un cercle : </label>
    <input type="number" name="valeurRayon" id="valeurRayon" required>
    <br />
    <label for="checkboxPerimetre">Périmètre : </label>
    <input type="checkbox" name="checkboxPerimetre" id="checkboxPerimetre" checked>
    <br />
    <label for="checkboxAire">Aire : </label>
    <input type="checkbox" name="checkboxAire" id="checkboxAire" checked>
    <br />
    <input type="submit" value="Envoyer">

</form>

<!-- <form action="#" method="POST">
    <label for="rayon">Rayon : </label>
    <input type="number" name="rayon" id="rayon"><br/>
    <label for="perimetre">Perimetre:</label>
    <input type="checkbox" name="perimetre" id="perimetre" checked><br/>
    <label for="aire">Aire:</label>
    <input type="checkbox" name="aire" id="aire" checked><br/>
    <input type="submit" value="Envoyer">
</form> -->




<?php

$p = isset($_GET["valeurRayon"]);

function resultat($p, $resultatP, $resultatA)
{
    echo "<h2>Résultats</h2>";
    echo "<br/>";
    echo "Le périmètre d'un cercle de rayon : " . $p . " est de : " . $resultatP;
    echo "<br/>";
    echo "L'aire' d'un cercle de rayon : " . $p . " est de : " . $resultatA;
}



if (isset($_GET["valeurRayon"]) && isset($_GET["checkboxAire"]) && isset($_GET["checkboxPerimetre"])) {
    $resultatA = $_GET["valeurRayon"] ** 2 * 3.14;
    $resultatP = $_GET["valeurRayon"] * 2 * 3.14;
    resultat($p, $resultatP, $resultatA);
} elseif (isset($_GET["valeurRayon"]) && isset($_GET["checkboxPerimetre"])) {
    $resultatP = $_GET["valeurRayon"] * 2 * 3.14;
    echo "<h2>Résultats</h2>";
    echo "<br/>";
    echo "Le périmètre d'un cercle de rayon : " . $p . " est de : " . $resultatP;
} elseif (isset($_GET["valeurRayon"]) && isset($_GET["checkboxAire"])) {
    $resultatA = $_GET["valeurRayon"] ** 2 * 3.14;
    echo "<h2>Résultats</h2>";
    echo "<br/>";
    echo "L'aire d'un cercle de rayon : " . $p . " est de : " . $resultatA;
} else {

    echo "<h2>Selctionner case(s)</h2>";
}


if (isset($_POST['rayon']) && $_POST['rayon'] > 0) {
    $rayon = $_POST["rayon"];
    echo "<h2> Résultats </h2>";
    echo "<p>";
    if (isset($_POST['perimetre'])) {
        echo "Le périmetre d'un cercle de rayon : <b>" . $rayon . "</b> est : <b>" . ($rayon * 2 * pi()) . "</b><br/>";
    }
    if (isset($_POST['aire'])) {
        echo "L'aire d'un cercle de rayon : <b>" . $rayon . "</b> est : <b>" . ($rayon * $rayon * pi()) . "</b><br/>";
    }
    echo "</p>";
} else {
    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
}

?>








<?php
include("common/footer.php");
?>