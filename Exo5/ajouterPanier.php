<?php
include("common/menu.php");
require_once("class/class_monPDO.php");
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/manager_fruit.php");
require_once("class/manager_panier.php");
include("common/header.php");

// echo "<pre>";
?>
<div class="container ">
    <p>info : exo5</p>
    <h2 class="perso_backgroundColorBlueLight text-white p-1  mt-2  rounded-lg border border-dark ">Ajout d'un panier :
    </h2>

    <!-- <form action="#" method="post">
        <fieldset>
            <legend>Ajouter Panier :</legend>
            <label for="client">Nom du client : </label>
            <input class="form-control" type="text" name="client" id="client" required>
            <label for="nombreDePommes">Nombres de pommes : </label>
            <input class="form-control" type="number" name="nombreDePommes" id="nombreDePommes" required>
            <label for="nombreDeCerises">Nombres de cerises : </label>
            <input class="form-control" type="number" name="nombreDeCerises" id="nombreDeCerises" required>
            <button type="submit">Créer le Panier</button>
        </fieldset>
    </form> -->

    <form action="#" method="post">
        <div class="row">
            <div class="col">
                <label for="client">Nom du client : </label>
                <input class="form-control" type="text" name="client" id="client" required>
            </div>
            <div class="col">
                <label for="nombreDePommes">Nombres de pommes : </label>
                <input class="form-control" type="number" name="nombreDePommes" id="nombreDePommes" required>
            </div>
            <div class="col">
                <label for="nombreDeCerises">Nombres de cerises : </label>
                <input class="form-control" type="number" name="nombreDeCerises" id="nombreDeCerises" required>
            </div>
            <div class="col">
                <button class="btn btn-primary p-2 mt-4" type="submit ">Créer le Panier</button>
            </div>

        </div>


    </form>

    <?php




    if (isset($_POST["client"]) && !empty($_POST["client"])) {
        $panierCreer = new Panier(Panier::idCreerUnique(), $_POST["client"]);
        $res = $panierCreer->saveInDB();
        if ($res) {
            $nbrPommes = (int)$_POST["nombreDePommes"];
            $nbrCerises = (int)$_POST["nombreDeCerises"];
            $cpt = 1;
            $nbFruitInDB = Fruit::generateUniqueIDFruit();
            for ($i = 0; $i <  $nbrPommes; $i++) {
                $fruit = new Fruit("pomme_" . ($nbFruitInDB + $cpt), rand(0, 30), rand(0, 30), 20);
                $fruit->saveFruitInDB($panierCreer->getIdentifiant());
                $panierCreer->addFruit($fruit);
                $cpt++;
            }
            for ($i = 0; $i <  $nbrCerises; $i++) {
                $fruit = new Fruit("cerise_" . ($nbFruitInDB + $cpt), rand(0, 30), rand(0, 30), 20);
                $fruit->saveFruitInDB($panierCreer->getIdentifiant());
                $panierCreer->addFruit($fruit);
                $cpt++;
            }

            echo $panierCreer;
            echo "Enregistré dans la BDD";
        } else {
            echo "L'ajout n'a pas fonctionné";
        }

        // echo $panierCreer;
        //     $panierv = new Panier();
        //     $nbrPommes = (int)$_POST["nombreDePommes"];
        //     $nbrCerises = (int)$_POST["nombreDeCerises"];

        //     for ($i = 0; $i <  $nbrPommes; $i++) {
        //         $panierv->addFruit(new Fruit(Fruit::CHERRYIMG, Fruit::POMME, rand(0, 30), rand(0, 30)));
        //     }
        //     for ($i = 0; $i <  $nbrCerises; $i++) {


        //         $panierv->addFruit(new Fruit(Fruit::POMMEIMG, Fruit::CERISE, rand(0, 30), rand(0, 30)));
        //     }

        //     $panier1Et2[] = $panierv;
    }




    ?>


    <?php

    include("common/footer.php");
    ?>