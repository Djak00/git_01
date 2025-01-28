<?php

echo "lalal";
$nomJoueur1 = "Matthieu"; // string
$ageJoueur1 = 30; //entier (integer)
$estUnHommeJoueur1 = true;

$nomJoueur2 = "tata"; // string
$ageJoueur2 = 25; //entier (integer)
$estUnHommeJoueur2 = false;



//___________________________________________________________________

// echo "Nom du joueur 1 : " . $nomJoueur1;
// echo "<br />";
// echo "Age du joueur 1 : " . $ageJoueur1;
// $age = $ageJoueur1 +1 ;
// echo "<br />";
// echo "Age du joueur 1 : " . $ageJoueur1;
// echo "<br />";



// //___________________________________________________________________

// // Si
// if($estUnHommeJoueur1 === true){
//     echo "C'est un homme";
    
// // Alors
// } else { //$estUnHomme === false
//     echo " C'est une femme";

// }



//___________________________________________________________________

// test();

// function test () {
//     echo "<br/>" ;
//     echo "Salut" ;
//     echo "<br/>" ;
// }



//___________________________________________________________________


function afficherJoueur ($nom, $age, $homme) {

//global $nomJoueur1, $ageJoueur1, $estUnHommeJoueur1;

echo "Nom du joueur 1 : " . $nom;
echo "<br />";
echo "Age du joueur 1 : " . $age;
$age = $age +1 ;
echo "<br />";
echo "Age du joueur 1 : " . $age;
echo "<br />";


// Si
if($homme === true){
    echo "C'est un homme";
// Alors
} else { //$estUnHomme === false
    echo " C'est une femme";

}
    
}
//___________________________________________________________________

afficherJoueur ($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);

echo "<br/>";

afficherJoueur ($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);

//___________________________________________________________________

function test ($c){
    $a = 5;
    $b = 10;
    return $a + $b + $c;
}

//___________________________________________________________________


$text = test(3);
echo "<br />";
echo $text;


//___________________________________________________________________



?>