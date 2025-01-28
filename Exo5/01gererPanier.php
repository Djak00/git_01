<?php
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
include("common/header.php");
include("common/menu.php");
echo "<pre>";
?>
<p>info : exo5</p>
<h2>Fruits :</h2>

<?php
$fruit1 = new Fruit(Fruit::POMMEIMG, Fruit::POMME, 8, 30);
$fruit3 = new Fruit(Fruit::CHERRYIMG, Fruit::CERISE, 2, 6);

echo "<pre>";
$panier1 = new Panier();
$panier1->addFruit($fruit1);
$panier1->addFruit($fruit3);
$panier1->addFruit($fruit3);

$panier2 = new Panier();
$panier2->addFruit($fruit3);
$panier2->addFruit($fruit1);
$panier2->addFruit($fruit1);
$panier2->addFruit($fruit1);



$panier1Et2 = [$panier1, $panier2];



if (isset($_POST["selectPanier"])) {

    $panierAfficher = Panier::getPanierParId((int)$_POST["selectPanier"]);

    echo $panierAfficher;
}

if (isset($_POST["nombreDePommes"])) {
    $panierv = new Panier();
    $nbrPommes = (int)$_POST["nombreDePommes"];
    $nbrCerises = (int)$_POST["nombreDeCerises"];

    for ($i = 0; $i <  $nbrPommes; $i++) {


        $panierv->addFruit(new Fruit(Fruit::CHERRYIMG, Fruit::POMME, rand(0, 30), rand(0, 30)));
    }
    for ($i = 0; $i <  $nbrCerises; $i++) {


        $panierv->addFruit(new Fruit(Fruit::POMMEIMG, Fruit::CERISE, rand(0, 30), rand(0, 30)));
    }

    $panier1Et2[] = $panierv;
}




?>
<form action="#" method="post">
    <fieldset>
        <legend>Panier a creer</legend>
        <label for="nombreDePommes">Nombres de pommes : </label>
        <input type="number" name="nombreDePommes" id="nombreDePommes" required>
        <label for="nombreDeCerises">Nombres de cerises : </label>
        <input type="number" name="nombreDeCerises" id="nombreDeCerises" required>
        <button type="submit">Créer le Panier</button>
    </fieldset>
</form>
<form action="#" method="post">
    <fieldset>
        <legend>Afficher panier</legend>
        <label for="selectPanier">Panier : </label>
        <select name="selectPanier" id="selectPanier" onchange="submit()">
            <option value=""></option>
            <?php
            foreach ($panier1Et2 as $panier) {
                echo '<option value="' . $panier->getIdentifiant() . '">Panier : ' . $panier->getIdentifiant() . '</option>';
            }
            ?>
        </select>
    </fieldset>
</form>

<?php
include("common/footer.php");
?>