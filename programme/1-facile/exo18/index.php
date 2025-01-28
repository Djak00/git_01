<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Formulaire & Méthode GET "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<!-- <form action="#" method="GET">
    <fieldset>
        <legend>Formulaire</legend>
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" id="pseudo" required>
        <label for="age">Age : </label>
        <input type="number" name="age" id="age" required>
        <input type="submit" value="Valider">
    </fieldset>
</form> -->

<form action="#" method="GET">
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo : </label>
        <input type="text" class="form-control" name="pseudo" id="pseudo" required aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age : </label>
        <input type="number" class="form-control" name="age" id="age" required>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php

if (isset($_GET["pseudo"])) {

    $nom = $_GET["pseudo"];
    $age = $_GET["age"];

    echo $nom . " à " . $age . " ans";
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