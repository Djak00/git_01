<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo1</p>
<h1>Affichage des tables de multiplication</h1>
<h2>Table de 4 </h2>

<?php

echo tableDe4();

function tableDe4()

{
    $a = -1;
    $b = 4;


    while ($a < 9) {

        $a++;
        echo "$a" . " * " . "$b" . " = " . $a * $b . "<br/>";
    }
    return;
}


echo "<br />----------------------------------------------------------------------<br />";
?>
<fieldset>
    <legend>TABLES</legend>
    <br>

    <form action="#" method="GET">
        <label for="caseTable">Table de multiplication à afficher : </label>
        <input type="number" name="caseTable" id="caseTable" required>
        <input type="submit" value="Valider">
    </form>

    <?php

    define("TABLE", 6);









    // for ($i = 0; $i <= 9; $i++) {
    //     echo $i . " * " . TABLE . " = " . $i * TABLE . '<br/>';
    // }


    if (isset($_GET["caseTable"])) {

        $table =  $_GET["caseTable"];
        echo "<h3>Table de " . $table . "</h3>";
        for ($i = 0; $i <= 9; $i++) {
            echo $i . " * " . $table . " = " . $i * $table . '<br/>';
        }
    } else {
        echo "<h2>Entrer un nombre</h2>";
    }


    ?>
</fieldset>
<?php
include("common/footer.php");
?>