<?php

define("SEPARATION", "-");
//$joueur1=array();

// $joueur1 = ["Mathieu", 20, true];

$joueur1 = [
    "nom" =>  "Mathieu",
    "age" =>  20,
    "estUnHomme" =>  true
];



// $joueur2 = ["tata", 20, true];
$joueur2 = [
    "nom" =>  "tata",
    "age" =>  30,
    "estUnHomme" =>  false
];

$joueur3 = [
    "nom" =>  [
        "Nom" => "toto",
        "Prenom" => "titi"
    ],
    "age" =>  32,
    "estUnHomme" =>  true
];







separation(SEPARATION);
//___________________________________________________________________

print_r($joueur1);

separation(SEPARATION);

echo $joueur3["nom"]["Nom"] . "<br/>";

separation(SEPARATION);

// afficherJoueur($joueur1[0], $joueur1[1], $joueur1[2]);
afficherTableau($joueur1);

separation(SEPARATION);

// afficherJoueur($joueur2[0], $joueur2[1], $joueur2[2]);
afficherTableau($joueur2);

separation(SEPARATION);

afficherTableau($joueur3);

functMajeur($joueur2["age"]);
separation(SEPARATION);
functMajeur($joueur1["age"]);
separation(SEPARATION);
joueurLePlusVieux($joueur1["age"], $joueur2["age"]);


$varDifferenceAge = functionDifferenceAge($joueur1["age"], $joueur2["age"]);
echo "La dif d'age entre joueur 1 et joueur 2 est de : " . $varDifferenceAge;

$varEchoWile70 = "-";
wile70($varEchoWile70);


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


//________________________________for___________________________________


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
        $resultat =  -$resultat;
    }
    return $resultat;
}



//___________________________switch case_______________________________________

function functMajeur($ageMajeur)
{
    if ($ageMajeur > 18) {
        # code...
        echo "il est majeur : ";
    } elseif ($ageMajeur === 18) {
        # code...
        echo "tout juste majeur : ";
    } else {
        echo "il est mineur : ";
    }
    echo "" . $ageMajeur;
    //switchCase-------------------------------------------------------
    switch ($ageMajeur) {
        case 22: // sans le break ca va affiche le message majeur
        case 21:
            echo " majeur de plus 21 ans";
        case 20:
        case 19:
            echo " majeur";
            break;
        case 18:
            echo " tout juste majeur";

            break;
        case 17:
            echo " encore mineur";

            break;
        case 16:
            echo " mineur";

            # code...
            break;

        default:
            echo " ???? ";
            # code...
            break;
    }
}


//________________wile__________________________________________________

function wile70($varEchoWile70)
{
    echo "<br/>";
    $i = 0;
    while ($i < 70) {
        $i++;

        echo $varEchoWile70;

        # code...
    }
}

//__________________________________________________________________

// function afficherTableau($tab)
// {
//     $nombreCaseTableau = count($tab);
//     for ($i = 0; $i < $nombreCaseTableau; $i++) {
//         echo $tab[$i] . "<br/>";
//     }
// }
//____________________foreach______________________________________________

// function afficherTableau($tab)
// {
//     foreach ($tab as $indice => $value) {
//         echo $indice . " : " . $value . "<br/>";
//     }
// }

function afficherTableau($tab)
{
    foreach ($tab as $indice => $value) {
        if (!is_array($value)) {
            echo $indice . " : " . $value . "<br/>";
        } else {
            afficherTableau($value);
        }
    }
}
