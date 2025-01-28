<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo2</p>
<h1>Affichage d'une pyramide</h1>
<h2></h2>
</a>

<br>




<form action="#" method="POST">
    <label for="nombreEntrer">Hauteur de la pyramide</label>
    <input type="number" name="nombreEntrer" id="nombreEntrer" required>
    <input type="submit" value="Envoyer">
</form>







<br>

<?php

if (isset($_POST["nombreEntrer"]) && $_POST["nombreEntrer"] > 0) {
    $hauteur = $_POST["nombreEntrer"];
    echo "Hauteur = " . $hauteur . "<br/>";
    $txt = "";
    for ($i = 0; $i <  $hauteur; $i++) {

        $txt .= "xx";
        echo $txt . "<br/>";
    }
    for ($i = 0; $i <  $hauteur - 1; $i++) {
        $txt = substr($txt, 0, strlen($txt) - 2);
        echo $txt . "<br/>";
    }
}



?>








<?php
include("common/footer.php");
?>