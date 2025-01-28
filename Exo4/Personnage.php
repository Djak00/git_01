<?php
require_once("class/class_personnage.php");
include("common/header.php");
include("common/menu.php");
?>
<p>info : </p>
<!-- <img src="" alt="" srcset="" width=20% height=10% /> -->
<h1>Peronnages :</h1>
<?php




$p1 = new Personnage("Luke", "player.png", 27, Personnage::HOMME, 5, 4);
$p1->affichImageEtInfo();

echo "<br/>----------------------------<br/>";

$p2 = new Personnage("Katy", "playerF.png", 22, Personnage::FEMME, 3, 6);
// $p2->nom = "Katy";
// $p2->age = 25;
// $p2->img = "playerF.png";
// $p2->sexe = false;
// $p2->force = 8;
// $p2->agilite = 3;
$p2->affichImageEtInfo();
echo "<br/>----------------------------<br/>";

$p3 = new Personnage("Marc", "playerM.png", 33, Personnage::HOMME, 7, 2);
$p3->setNom("Albin");
$p3->affichImageEtInfo();
echo $p3->getNom();
echo "<br/>";
echo "<pre>";
$persos = Personnage::getListePersonnage();
print_r($persos);
echo "</pre>";



?>


<?php
include("common/footer.php");
?>