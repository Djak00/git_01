<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaires et Tableau "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action="#" method="get">

    <div class="mb-3">
        <label for="note1" class="form-label">Note 1 : </label>
        <input type="number" class="form-control" name="note1" id="note1" required>
    </div>
    <div class="mb-3">
        <label for="note2" class="form-label">Note 2 : </label>
        <input type="number" class="form-control" name="note2" id="note2" required>
    </div>
    <div class="mb-3">
        <label for="note3" class="form-label">Note 3 : </label>
        <input type="number" class="form-control" name="note3" id="note3" required>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php

if (
    isset($_GET["note1"]) && !empty($_GET["note1"])
    && isset($_GET["note2"]) && !empty($_GET["note2"])
    && isset($_GET["note3"]) && !empty($_GET["note3"])
) {
    $note1 = $_GET["note1"];
    $note2 = $_GET["note2"];
    $note3 = $_GET["note3"];
    $notes = [$note1, $note2, $note3];
    echo "<h2>La moyenne des 3 notes est de : " . moyenne($notes) . "<h2/>";
}

function moyenne($notes)
{
    $resultat = 0;
    foreach ($notes as  $value) {
        $resultat += $value;
    }
    $resultat = $resultat / count($notes);
    return round($resultat, 2);
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