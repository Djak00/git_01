<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Manipuler deux classes"; //Mettre le nom du titre de la page que vous voulez
include_once("class/player.class.php");
include_once("class/arme.class.php");
?>

<!-- mettre ici le code -->

<?php
echo "<pre>";
$player1 = new Player("robert", 25, 100, 2);
$player2 = new Player("josiane", 48, 88, 3);
$player3 = new Player("luc", 25, 100, 4);
$player4 = new Player("david", 48, 88, 8);
$player5 = new Player("olivier", 48, 88, 5);

$arme1 = new Arme("escalibure", 12);
$arme2 = new Arme("claymore", 2);
$arme3 = new Arme("lance", 7);
$arme4 = new Arme("sabre", 4);
$arme5 = new Arme("Hache", 10000);



$tabPlayers = Player::getTabPlayers();

foreach ($tabPlayers as $key => $player) {
    echo $player;
    echo "----------------------<br>";
}
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>