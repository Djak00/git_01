<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Tableaux associatifs "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$tabMatthieu = ['Nom' => 'Matthieu', 'Age' => 30, 'Sexe' => true];
$tabMarie = ['Nom' => 'Marie', 'Age' => 32, 'Sexe' => false];

voirTab($tabMatthieu);
voirTab($tabMarie);

function voirTab($tab)
{
    echo "Nom : " . $tab["Nom"] . "<br/>";
    echo "Age : " . $tab["Age"] . "<br/>";

    // if ($tab["Sexe"]=== true) meme chose
    if ($tab["Sexe"]) {
        echo "Sexe : Homme <br/>";
    } else {
        echo "Sexe : Femme <br/>";
    }
    echo "-------------------------<br/>";
}

// function voirTtabab($tab)
// {

//     foreach ($tab as $key => $value) {
//         echo $key . " : " . $value . "<br/>";
//     }
//     echo "-------------------------<br/>";
// }
?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>