<?php
require_once("class/class_panier.php");
require_once("class/class_fruit.php");
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo3</p>
<!-- <img src="" alt="" srcset="" width=20% height=10% /> -->
<h1>Class Panier</h1>

<?php

$f1 = new Fruit(Fruit::POMMEIMG, Fruit::POMME, 8, 30);

$f3 = new Fruit(Fruit::CHERRYIMG, Fruit::CERISE, 2, 6);


// echo "<pre>";
$panier1 = new Panier();
$panier1->addFruit($f1);
$panier1->addFruit($f3);
$panier1->addFruit($f3);

$panier2 = new Panier();
$panier2->addFruit($f3);
$panier2->addFruit($f1);
$panier2->addFruit($f1);
$panier2->addFruit($f1);

echo $f3->getImg();
// echo $f3->getNom();
echo $panier1;
echo $panier2;

?>

<?php
include("common/footer.php");
?>