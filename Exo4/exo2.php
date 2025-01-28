<?php
require_once("class/class_fruit.php");
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo2</p>
<h1>Class Fruit</h1>

<?php


$f1 = new Fruit("apple.png", "Pomme", 8, 30);
$f2 = new Fruit("apple.png", "Pomme", 5, 25);
$f1 = new Fruit("apple.png", "Pomme", 7, 29);
$f2 = new Fruit("apple.png", "Pomme", 4, 24);
$f3 = new Fruit("cherry.png", "Cerise", 2, 6);
$f4 = new Fruit("cherry.png", "Cerise", 7, 15);
$f3 = new Fruit("cherry.png", "Cerise", 1, 5);
$f4 = new Fruit("cherry.png", "Cerise", 6, 14);


$voir =  fruit::getTabFruits();
// echo "<pre>";
// echo print_r($voir);
// echo "</pre>";

foreach ($voir as  $value) {
    $value->affichAttributs();
}

// echo "<pre>";
// echo print_r(Fruit::getTabFruits());
// echo "</pre>";

?>


<!-- ---------------------------CORECTION------------------------------ -->

<!--  
    $pomme1 = new Fruit(Fruit::POMME,150);
    $pomme2 = new Fruit(Fruit::POMME,130);
    $pomme3 = new Fruit(Fruit::POMME,160);
    $cerise1 = new Fruit(Fruit::CERISE,10);
    $cerise2 = new Fruit(Fruit::CERISE,15);
    $cerise3 = new Fruit(Fruit::CERISE,20);
    $cerise4 = new Fruit(Fruit::CERISE,10);
    $fruits = [$pomme1,$pomme2,$pomme3,$cerise1,$cerise2,$cerise3,$cerise4];

    foreach($fruits as $fruit){
        echo $fruit;
        echo "<br />------------------------ <br />";
    } -->