<?php ob_start(); //NE PAS MODIFIER 
$titre = "Les Animaux"; //Mettre le nom du titre de la page que vous voulez
require_once("class/MonPdo.php");
require_once("class/AnimalClass.php");
require_once("class/AnimalDaoClass.php");
?>

<!-- mettre ici le code -->

<?php
// controleur --------------------------------------------------------------;
echo "<pre>";
// print_r($animaux);
// print_r(AnimalDaoClass::getAnimauxBD());
$animaux = AnimalDaoClass::getAnimauxBD();
foreach ($animaux  as $animal) {
    $image = AnimalDaoClass::getImagesAnimale($animal["idAnimal"]);
    $type = AnimalDaoClass::getTypeAnimal($animal["idAnimal"]);
    new AnimalClass($animal["idAnimal"], $animal["nom"], (int)$animal["age"], (int)$animal["sexe"], $type, $image);
}

// view--------------------------------------------------------------;
?>
<?php
// foreach (AnimalClass::$tabAnimaux as $animal) {
//     echo "id : " . $animal->getIdAnimal() . "<br/>";
//     echo "Nom : " . $animal->getNomAnimal() . "<br/>";
//     echo "Age : " . $animal->getAgeAnimal() . "<br/>";
//     echo "Sexe : " . (($animal->getSexeAnimal() === 0) ? "femelle"  : "male") . "<br/>";
//     echo "Type : " . $animal->getTypeAnimal() . "<br/>";
// foreach ($animal->getTabImagesAnimal() as $image) {
//     echo "Image : " . $image["libelle"] . "<br/>";
//     echo "Image : " . "<img class='rounded float-start' alt='...' style = width:100px src='sources/" . $image["url"] . "' >" . "<br/>";
// }
// }
?>

<?php ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">Sexe</th>
            <th scope="col">Type</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (AnimalClass::$tabAnimaux as $animal) { ?>
            <tr>
                <th scope="row"><?= $animal->getIdAnimal() ?></th>
                <td><?= $animal->getNomAnimal() ?></td>
                <td><?= $animal->getAgeAnimal() ?></td>
                <td><?= (($animal->getSexeAnimal() === 0) ? "femelle"  : "male") ?></td>
                <td><?= $animal->getTypeAnimal() ?></td>
                <td style="width:200px" class="text-center">
                    <?php foreach ($animal->getTabImagesAnimal() as $image) { ?>

                        <img class='rounded float-start img-fluid' alt='<?= $image["libelle"] ?>' style='width:100px'
                            src='sources/<?= $image["url"] ?>'>

                    <?php } ?>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>