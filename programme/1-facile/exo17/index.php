<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableaux comple "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$tabMatthieu = [
    'Nom' => 'Matthieu',
    'Age' => 30,
    'Sexe' => true,
    "Notes" => [
        "Note 1" => 2,
        "Note 2" => 5,
        "Note 3" => 15,
        "Note 4" => 10
    ]
];
$tabMarie = ['Nom' => 'Marie', 'Age' => 32, 'Sexe' => false, "Notes" => ["Note 1" => 10, "Note 2" => 12, "Note 3" => 11, "Note 4" => 11]];
$tabMac = ['Nom' => 'Marc', 'Age' => 25, 'Sexe' => true, "Notes" => ["Note 1" => 15, "Note 2" => 5, "Note 3" => 20, "Note 4" => 15]];
$tabMathilde = ['Nom' => 'Mathilde', 'Age' => 21, 'Sexe' => false, "Notes" => ["Note 1" => 3, "Note 2" => 6, "Note 3" => 9, "Note 4" => 12]];
$tabAll = [$tabMatthieu, $tabMarie, $tabMac, $tabMathilde];

voirTab($tabMatthieu);
voirTab($tabMarie);
voirTab($tabMac);
voirTab($tabMathilde);


function voirTab($tab)
{
    echo "Nom : " . $tab["Nom"] . "<br/>";
    echo "Age : " . $tab["Age"] . "<br/>";
    if ($tab["Sexe"]) {
        echo "Sexe : Homme <br/>";
    } else {
        echo "Sexe : Femme <br/>";
    }
    for ($i = 1; $i <= count($tab["Notes"]); $i++) {
        echo "Note $i : " . $tab["Notes"]["Note $i"] . "<br/>";
    }
    echo "La moyenne est de : " . calculMyenne($tab) . "<br/>";

    echo "-------------------------<br/>";
}




function calculMyenne($tab)
{
    $resultat = 0;
    for ($i = 1; $i <= count($tab["Notes"]); $i++) {

        $resultat += $tab["Notes"]["Note $i"];
    }
    $resultat = $resultat / ($i - 1);
    return $resultat;
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