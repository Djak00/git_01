<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mon premier site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css.css" />
    <!-- <script src="main.js"></script> -->
</head>

<body>
    <h1 class="titreBleu"> Formulaire </h1>
    <form action="#" method="POST">
        <fieldset>
            <legend>Informations</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="age">Age :</label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

    <?php
    if (isset($_POST["nom"])) {
        echo "<div class=\"resultat\">";
        echo "le nom est : " . $_POST["nom"] . "<br />";
        if (isset($_POST["age"])) {
            echo " et l'age est : " . $_POST["age"];
        }
        echo "</div>";
    }

    ?>

</body>

</html>