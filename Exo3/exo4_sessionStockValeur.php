<?php
include("common/header.php");
include("common/menu.php");

session_start();
if (!isset($_SESSION["sessionNombreRand"])) {
    $_SESSION["sessionNombreRand"] = rand(1, 10);
}

?>
<p>info : exo4 session et stock valeur input type="hidden"</p>
<h1>Trouver le nombre choisi par l'ordinateur</h1>


<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Reinitialiser">
</form>



<form action="#" method="POST">
    <label for="nombre">Quel est le nombre : </label>
    <input type="number" name="nombreSaisie" id="nombreSaisie">
    <br />
    <input type="submit" value="Envoyer">
</form>

<br />
<?php



if (isset($_POST["reinit"]) && $_POST["reinit"] === "yes") {
    $_SESSION["sessionNombreRand"] = rand(1, 10);
}


$nombreRand = $_SESSION["sessionNombreRand"];




echo "<h2>";
if (isset($_POST["nombreSaisie"]) && $_POST["nombreSaisie"] > 0) {
    $nombreSaisie = (int)$_POST["nombreSaisie"];
    if ($nombreRand === $nombreSaisie) {
        echo "C'est gagné !";
    } else {
        if ($nombreRand > $nombreSaisie) {
            echo "Le nombre est plus grand !";
        } else {
            echo "Le nombre est plus petit !";
        }
    }
} else {
    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
}
echo "</h2>";
echo $nombreRand . "<br/>";

?>


<?php
include("common/footer.php");
?>