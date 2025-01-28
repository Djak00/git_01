<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : Liste deroulante</p>

<h1>Selection du personnage</h1>



<form action="#" method="post">

    <label for="perso" id="perso">Choisissez un personnage :</label>
    <select name="perso" id="perso">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select><br />
    <input type="submit" value="Choisir">

</form>



<?php

if (isset($_POST["perso"])) {
    if ($_POST["perso"] === "homme") {
        echo "<img src=\"sources\images\player.png\" alt = 'image homme'/>";
    } elseif ($_POST["perso"] === "femme") {
        echo "<img src=\"sources\images\playerf.png\" alt = 'image femme' />";
    }
} else {
    echo "<h2>Saisir valeur ci-dessus</h2>";
}

?>

<?php
include("common/footer.php");
?>