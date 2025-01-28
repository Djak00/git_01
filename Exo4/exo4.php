<?php
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo4</p>
<!-- <img src="" alt="" srcset="" width=20% height=10% /> -->
<h1>Fruits :</h1>

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

// echo $f3->getImg();
// echo $panier1;
// echo $panier2;

$panier1Et2 = [$panier1, $panier2];



?>

<form action="#" method="post">
    <label for="selectPanier" id="">Panier : </label>
        <select name="selectPanier" id="selectPanier" onchange="submit()">
            <option value=""></option>
            <?php
                foreach ($panier1Et2 as $panier) {
                    echo '<option value="' . $panier->getIdentifiant() . '">Panier : ' . $panier->getIdentifiant() . '</option>';
                }
            ?>
        </select>
</form>


<?php


if (isset($_POST["selectPanier"])) {
    $panierAfficher = Panier::getPanierParId((int)$_POST["selectPanier"]);
    echo $panierAfficher;
}

// function getPanierParId($id)
// {
//     global $panier1Et2;
//     foreach ($panier1Et2 as $panier) {
//         if ($panier->getIdentifiant() === $id) {
//             return $panier;
//         }
//     }
// }
?>











<?php
include("common/footer.php");
?>