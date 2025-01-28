<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Les tables de multiplications"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->


<?php






// $ligne = [];


// echo "<pre>";
// for ($i = 1; $i <= 10; $i++) {
//     $colonne = [];
//     for ($j = 1; $j <= 10; $j++) {

//         $colonne[] = $j * $i;
//     }
//     $ligne[] = $colonne;
// }



// print_r($ligne);



?>
<!-- <style>
    .table {
        width: 100%;
    }
</style> -->

<table class="table ">
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <tr <?= ($i === 1) ? 'class="font-weight-bold"' : '' ?>>

            <?php for ($j = 1; $j <= 10; $j++) : ?>

                <td <?= ($j === 1) ? 'class="font-weight-bold"' : '' ?>>
                    <?= $i * $j ?>
                    <!-- <?= $ligne[$i][$j]; ?> -->
                </td>

            <?php endfor; ?>
        </tr>
    <?php endfor; ?>


</table>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>