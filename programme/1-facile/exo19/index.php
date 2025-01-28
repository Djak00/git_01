<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Formulaire & Méthode POST "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action="#" method="POST">

    <div class="mb-3">
        <label for="chiffre" class="form-label">Chiffre : </label>
        <input type="number" class="form-control" name="chiffre" id="chiffre" required>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php

if (isset($_POST["chiffre"]) && !empty($_POST["chiffre"])) {
    $chiffre = $_POST["chiffre"];

    if ($chiffre % 2 === 0) {
        echo "<br/>Le chiffre est pair :)";
    } else {
        echo "<br/>Le chiffre n'est pas paire !";
    }
} else {
    echo "<br/>Saisir chiffre";
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