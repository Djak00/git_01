<?php
include("common/header.php");
include("common/menu.php");
?>
<p>info : exo7</p>
<h1>Tableaux</h1>

<?php

$tableau01 = [2, 6, 12, 5, 26, 34, 40, 60];
var_dump($tableau01);
echo "<br/>";

tableauPaire($tableau01);
if (tableauPaire($tableau01) === true) {
    echo "<br/>Ce tableau n'a pas de nombre impair";
} else {
    echo "<br/>Ce tableau comporte un ou plusieur nombre impair";
}

function tableauPaire($tab)
{
    for ($i = 0; $i <= count($tab) - 1; $i++) {
        if ($tab[$i] % 2 !== 0) {
            return false;
        }
    }
    return true;
};




?>

<?php
include("common/footer.php");
?>