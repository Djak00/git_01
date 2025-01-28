<?php
require_once("class/class_monPDO.php");
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/manager_fruit.php");
require_once("class/manager_panier.php");
class Fruit
{

    private $nom;
    private $poid;
    private $prix;


    public static $fruits = [];



    function __construct($nom, $poid, $prix)
    {

        $this->nom = $nom;
        $this->poid = $poid;
        $this->prix = $prix;
    }


    public function getImg()
    {
        return "<img src='sources/images/" . $this->img . "' alt='image de " . $this->nom . "'>";
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPoid()
    {
        return $this->poid;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPoid($poid)
    {
        $this->poid = $poid;
    }
    public function setprix($prix)
    {
        $this->poid = $prix;
    }



    public function __toString()
    {


        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poid . '<br />';
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }



    public function afficherListeFruit()
    {
        $affichage = '<div class="card" >';

        $affichage .= $this->getAffichageIMG();
        $affichage .= '<div class="card-body">';
        $affichage .= '<h5 class="card-title"> Nom : ' . $this->nom . "</h5>";
        $affichage .= '<p class="card-text"> Poids : ' . $this->poid . '<br />';
        $affichage .= "Prix : " . $this->prix . "<br />";
        $affichage .= '<div class="card p-2 " >';

        $idpanier =  managerfruit::getPanierFromFruit($this->nom);

        $paniers = managerpanier::getpaniers();
        $affichage .= '<form action="#" method="post">';
        $affichage .= "Pagnier de : ";
        $affichage .= '<input type="hidden" name="idPanier" id="idPanier" value="' . $this->nom . '">';
        $affichage .=  '<select name="selectPanier" id="selectPanier" class="form-select" aria-label="Default select example " onchange="submit()">';
        $affichage .= ' <option value=""></option>';
        foreach ($paniers as $panier) {

            if ($idpanier === $panier['id_panier']) {
                $affichage .= ' <option value="' . $panier['id_panier'] . '" selected>' . $panier['nom_client'] . '</option>';
            } else {

                $affichage .= ' <option value="' . $panier['id_panier'] . '">' . $panier['nom_client'] . '</option>';
            }
        }
        $affichage .= ' </select>';
        $affichage .= '</form>';



        if (isset($_POST['idPanier']) && $_POST['idPanier'] === $this->nom && isset($_POST['selectPanier']) && $_POST['selectPanier'] !== $idpanier) {
            $idPanier = (int)$_POST['selectPanier'];
            $nomFruit = $_POST['idPanier'];
            managerFruit::updatePanier($nomFruit, $idPanier);
        } else {
        }

        $affichage .= "</div>";
        $affichage .= "</div>";
        $affichage .= "</div>";
        return $affichage;
    }



    // $affichage .=  '<option selected> ' . managerfruit::getPanierFromFruit($this->nom) . ' </option>';


    public  function saveFruitInDB($idPanier)
    {
        return managerFruit::insertInToDB($this->nom, $this->poid, $this->prix, $idPanier);
    }



    private function getAffichageIMG()
    {
        if (preg_match("/cerise/", $this->nom)) {
            return "<img class=\"card-img-top mx-auto\"  style='width:100px' src ='sources/images/cherry.png' alt='image cerise'/><br/>";
        }
        if (preg_match("/pomme/", $this->nom)) {
            return "<img class=\"card-img-top mx-auto\"  style='width:100px' src ='sources/images/apple.png' alt='image pomme'/><br/>";
        }
    }

    public function getImageSmall()
    {
        if (preg_match("/cerise/", $this->nom)) {
            return "<img class=\"card-img-top mx-auto\"  style='width:35px' src ='sources/images/cherry.png' alt='image cerise'/><br/>";
        }
        if (preg_match("/pomme/", $this->nom)) {
            return "<img class=\"card-img-top mx-auto\"  style='width:50px' src ='sources/images/apple.png' alt='image pomme'/><br/>";
        }
    }

    public static function generateUniqueIDFruit()
    {

        return managerFruit::getNbFruitDansDB() + 1;
    }
}
