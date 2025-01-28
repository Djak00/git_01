<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo5</p>
<h1>Calculer une moyenne</h1>
<form action="#" method="get">
    <label for="nombreDeNotesSaisie">Nombre de notes :</label>
    <input type="number" name="nombreDeNotesSaisie" id="nombreDeNotesSaisie">
    <input type="submit" value="Ajouter">
</form>

<!-- <form action="#" method="post">
    <fieldset>
        <legend>Inscrire les notes pour calculer la moyenne</legend>
        <label for="notesSaisie">note :</label>
        <input type="number" name="notesSaisie" id="notesSaisie">
        <br />
        <input type="submit" value="Calculer">
    </fieldset>
</form> -->
<?php



if (isset($_GET["nombreDeNotesSaisie"])) {
    $nombreDeNotesSaisie = $_GET["nombreDeNotesSaisie"];

    echo "<form action=\"#\" method=\"post\">";
    echo "<fieldset>";
    echo "<legend>Inscrire les notes pour calculer la moyenne</legend>";
    for ($i = 1; $i <= $nombreDeNotesSaisie; $i++) {

        echo "<label for=\"notesSaisie" . $i . "\">note : </label>" . $i . " ";
        echo "<input type=\"number\" name=\"notesSaisie" . $i . "\" id=\"notesSaisie" . $i . "\" required>" . "<br/>";
    }
    echo "<input type=\"submit\" value=\"Calculer\">";
    echo "</fieldset>";
    echo "</form>";

    if (isset($_POST['notesSaisie1'])) {
        $resultat = 0;
        for ($i = 1; $i <= $nombreDeNotesSaisie; $i++)
            $resultat += $_POST['notesSaisie' . $i];


        echo "La myenne est : " . $resultat / $nombreDeNotesSaisie;
    }
} else {
    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
}




?>
<?php
include("common/footer.php");
?>