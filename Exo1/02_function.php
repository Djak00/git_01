<?php


$nomJoueur1 = "Matthieu"; // string
$ageJoueur1 = 50; //entier (integer)
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata"; // string
$ageJoueur2 = 42; //entier (integer)
$estUnHommeJoueur2 = false;
$separation = "-";

separation($separation);
//___________________________________________________________________

afficherJoueur($nomJoueur2, $ageJoueur1, $estUnHommeJoueur2);


separation($separation);

afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);

//___________________________________________________________________


function afficherJoueur($nom, $age, $homme)
{

    //global $nomJoueur1, $ageJoueur1, $estUnHommeJoueur1;

    echo "Nom du joueur : " . $nom;
    echo "<br />";
    echo "Age du joueur : " . $age;
    $age = $age + 1;
    echo "<br />";
    echo "Age du joueur 1 : " . $age;
    echo "<br />";

    // Si
    if ($homme === true) {
        echo "C'est un homme";
        // Alors
    } else { //$estUnHomme === false
        echo " C'est une femme";
    }
}

//___________________________________________________________________

function joueurLePlusVieux($ageJoueur1, $ageJoueur2)
{

    if ($ageJoueur1 > $ageJoueur2) {
        echo "joueur1 plus vieux";
    } else {
        echo "joueur2 plus vieux";
    }
}

separation("-");
//___________________________________________________________________

joueurLePlusVieux($ageJoueur1, $ageJoueur2);

//___________________________________________________________________
separation($separation);

function separation($separation)
{
    echo "<br />";

    for ($i = 0; $i < 50; $i++)

        echo $separation;

    echo "<br />";
};
//___________________________________________________________________

function functionDifferenceAge($age1, $age2)
{
    $resultat = $age1 - $age2;
    if ($resultat < 0) {
        $resultat = -$resultat;
    }
    return $resultat;
}


//__________________________________________________________________

$varDifferenceAge = functionDifferenceAge($ageJoueur1, $ageJoueur2);
echo "La dif s'ag entre joueur 1 et joueur 2 est de : " . $varDifferenceAge;

separation($separation);
