<?php
require_once("class/class_monPDO.php");
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/manager_fruit.php");
require_once("class/manager_panier.php");



class Panier
{
    public static $paniers = []; // Tableau statique pour stocker tous les paniers créés

    private $id_panier;          // ID unique du panier
    private $nom_client;         // Nom du client associé au panier
    private $panierPommes = [];  // Tableau pour stocker uniquement les fruits "pomme"
    private $panierCerises = []; // Tableau pour stocker uniquement les fruits "cerise"

    // Constructeur pour initialiser un panier avec un ID et le nom du client
    public function __construct($id_panier, $nom_client)
    {
        $this->id_panier = $id_panier;
        $this->nom_client = $nom_client;
    }

    public  function getIdentifiant()
    {
        return $this->id_panier;
    }

    // Ajoute des fruits au panier en les récupérant depuis la base de données
    public function addFruitToPanierFromDB()
    {
        // Appel à la méthode `getFruitPanier` de la classe `managerPanier` pour récupérer les fruits liés à ce panier
        $fruits = managerPanier::getFruitPanier($this->id_panier);

        // Parcours des fruits retournés
        foreach ($fruits as $fruit) {
            // Si le nom contient "cerise", on crée un objet `Fruit` et on l'ajoute au tableau $panierCerises
            if (preg_match("/cerise/", $fruit['nom'])) {
                $this->panierCerises[] = new Fruit($fruit['nom'], $fruit['poids'], $fruit['prix']);
            }
            // Si le nom contient "pomme", on fait de même pour $panierPommes
            else if (preg_match("/pomme/", $fruit['nom'])) {
                $this->panierPommes[] = new Fruit($fruit['nom'], $fruit['poids'], $fruit['prix']);
            }
        }
    }


    public function __toString()
    {
        $affich = '<form action="#" method="post">';
        $affich .= '<input type="hidden" name="idPanierAsupr" id="idPanierAsupr" value="' . $this->id_panier . '">';
        $affich .= '<div class="d-flex justify-content-between align-items-center p-2 mt-2 rounded-lg border border-dark perso_backgroundColorBlueLight">';
        $affich .= '<h2 class="text-white m-0">Contenu du panier : ' . $this->id_panier . " -> " . $this->nom_client . '</h2>';
        $affich .= '<div>';
        $affich .= '<input name="suprPanier" id="suprPanier" class="btn btn-light" type="submit" value="Supprimer panier">';
        $affich .= '</div>';
        $affich .= '</div>';
        $affich .= '</form>';
        $affich .= '<table class="table">';
        $affich .= '<thead>';
        $affich .= ' <tr>';
        $affich .= '  <th scope="col">Image</th>';
        $affich .= ' <th scope="col">Nom</th>';
        $affich .= ' <th scope="col">Poid</th>';
        $affich .= '  <th scope="col">Prix</th>';
        $affich .= ' <th scope="col">Modifier</th>';
        $affich .= '  <th scope="col">Supprimer</th>';
        $affich .= ' </tr>';
        $affich .= ' </thead>';

        foreach ($this->panierPommes as $pomme) {
            $affich .= $this->affichPommeCerise($pomme);
        }

        foreach ($this->panierCerises as $cerise) {
            $affich .= $this->affichPommeCerise($cerise);
        }
        $affich .= '  </tbody>';
        $affich .= ' </table>';

        if (isset($_POST["suprPanier"])) {
            $idPanier = (int)$_POST["idPanierAsupr"];
            managerpanier::suprPanierFromDB($idPanier);
        }

        return $affich;
    }



    private static function affichPommeCerise($fruit)
    {
        $affich = '   <tr>';
        $affich .= '    <td>' . $fruit->getImageSmall() . '</td>';
        $affich .= '    <td>' . $fruit->getNom()   . '</td>';
        if (isset($_GET["modifPoidPrix"]) && $_GET["modifPoidPrix"] === $fruit->getNom()) {
            $affich .= '<form action="#" method="post">';
            $affich .= '<input type="hidden" name="type" id="type" value="modification">';
            $affich .= '<input type="hidden" name="modifPoidPrix" id="modifPoidPrix" value="' . $fruit->getNom() . '">'; //id repris en bas
            $affich .= '<td><input type="number" name="modifPoid" id="modifPoid" value="' . $fruit->getPoid() . '"></td>';
        } else {
            $affich .= '    <td>' . $fruit->getPoid() . '</td>';
        }
        if (isset($_GET["modifPoidPrix"]) && $_GET["modifPoidPrix"] === $fruit->getNom()) {
            $affich .= '    <td><input type="number" name="modifPrix" id="modifPrix" value="' . $fruit->getPrix() . '"></td>';
        } else {
            $affich .= '    <td>' . $fruit->getPrix() . '</td>';
        }
        $affich .= '<td>';
        if (isset($_GET["modifPoidPrix"]) && $_GET["modifPoidPrix"] === $fruit->getNom()) {
            $affich .= '<input type="hidden" name="validPoidPrix" id="validPoidPrix" value="' . $fruit->getNom() . '">';
            $affich .= '<input class="btn btn-success" type="submit" value="Valider">';
            $affich .= '</form>';
        } else {
            $affich .= '<form action="#" method="get">';
            $affich .= '<input type="hidden" name="modifPoidPrix" id="modifPoidPrix" value="' . $fruit->getNom() . '">';
            $affich .= '<input class="btn btn-primary" type="submit" value="Modifier">';
            $affich .= '</form>';
        }
        $affich .= '</form>';
        $affich .= '<td>';
        $affich .= '<form action="#" method="post">';
        $affich .= '<input type="hidden" name="modifPoidPrix" id="modifPoidPrix" value="' . $fruit->getNom() . '">';
        $affich .= '<input type="hidden" name="type" id="type" value="suppression">';
        $affich .= '<input class="btn btn-primary" type="submit"  value="Supprimer">';
        $affich .= '</form>';
        $affich .= '</td>';
        $affich .= '</tr>';

        return $affich;
    }



    public function saveInDB()
    {

        return managerPanier::insertInToDB($this->id_panier, $this->nom_client);
    }

    public function addFruit($fruit)
    {
        if (preg_match("/cerise/", $fruit->getNom())) {
            $this->panierCerises[] = $fruit;
        } else if (preg_match("/pomme/", $fruit->getNom())) {
            $this->panierPommes[] = $fruit;
        }
    }


    public static function idCreerUnique()
    {

        return managerPanier::getNbPaniersDansDB() + 1;
    }
}
