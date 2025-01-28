<?php
//echo "ok";

// $tableau1 = [2, 6, 10, 20, 9, 14];
// $tableau2 = [4, 8, 2, 26, 18, 14];

// echo estTableauPair($tableau1);

function afficherTableau($tableau)
{

    for ($i = 0; $i < count($tableau) - 1; $i++) {
        echo $tableau[$i] . " - ";
    }
    echo $tableau[count($tableau) - 1];
};

function calculerMoyenne($tableau)
{
    $resultat = 0;
    for ($i = 0; $i < count($tableau); $i++) {
        $resultat += $tableau[$i];
    }
    echo "La moyenne est de : " . $resultat / count($tableau);
};

function estTableauPair($tableau)
{
    $resultat = 0;
    foreach ($tableau as $key => $values) {
        $resultat += $values;
    }

    if ($resultat % 2 === 0) {

        return true;
    } else {

        return false;
    }
};
