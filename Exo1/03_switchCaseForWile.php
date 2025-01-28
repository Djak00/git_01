<?php
define("SEPARATION", "-");

$nomJoueur1 = "Matthieu"; // string
$ageJoueur1 = 16; //entier (integer)
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata"; // string
$ageJoueur2 = 22; //entier (integer)
$estUnHommeJoueur2 = false;
$separation = "-";

separation(SEPARATION);
//___________________________________________________________________

afficherJoueur($nomJoueur2, $ageJoueur1, $estUnHommeJoueur2);


separation(SEPARATION);

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

separation(SEPARATION);
//___________________________________________________________________

joueurLePlusVieux($ageJoueur1, $ageJoueur2);

//________________________________for___________________________________
separation(SEPARATION);

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


//__________________________________________________________________

$varDifferenceAge = functionDifferenceAge($ageJoueur1, $ageJoueur2);
echo "La dif s'ag entre joueur 1 et joueur 2 est de : " . $varDifferenceAge;

separation(SEPARATION);

//__________________________________________________________________

functMajeur($ageJoueur2);
separation(SEPARATION);
functMajeur($ageJoueur1);
separation(SEPARATION);

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
            echo "????";
            # code...
            break;
    }
}






//__________________________________________________________________


$sab_nom = "Sabrina";
echo "Le prenom de ma cherie est : " . $sab_nom;
$sab_age = 1;

$alb_nom = "Albert";
$alb_age = 40;
echo "<br/>";
$resultatAge = ecartAge($sab_age, $alb_age);


echo "<h1>bonjour</h1>" . $resultatAge;

function ecartAge($age1, $age2)
{
    $resultatAge = $age1 - $age2;
    if ($resultatAge  < 0) {
        $resultatAge = -$resultatAge;
    }

    return $resultatAge;
}


separation(SEPARATION);
//________________wile__________________________________________________

function wile70($varEchoWile70)
{
    $i = 0;
    while ($i < 70) {
        $i++;
        echo $varEchoWile70;
        # code...
    }
}

$varEchoWile70 = "-";
wile70($varEchoWile70);

separation(SEPARATION);
//__________________________________________________________________