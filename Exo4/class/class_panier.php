<?php
class Panier
{
    private static $prochainIdentifiant = 1;
    private static $paniers = []; // Stocke tous les paniers créés


    private $identifiant;
    private   $panierPommes = [];
    private   $panierCerises = [];




    function __construct()
    {
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant++;
        self::$paniers[] = $this; // Ajoute le panier à la liste des panier
    }

    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    // Méthode pour obtenir un panier par identifiant
    public static function getPanierParId($id)
    {
        foreach (self::$paniers as $panier) {
            if ($panier->getIdentifiant() === $id) {
                return $panier;
            }
        }
        return null; // Retourne null si aucun panier n'est trouvé
    }


    public function addFruit($fruit)
    {
        if ($fruit->getNom() === Fruit::POMME) {

            $this->panierPommes[] = $fruit;
        } else if ($fruit->getNom() === Fruit::CERISE) {
            $this->panierCerises[] = $fruit;
        }
    }


    public function __toString()
    {
        $affich =  "Voici le panier " . $this->identifiant . ": " . "<br>";
        foreach ($this->panierPommes as $pomme) {
            $affich .= $pomme;
        }

        foreach ($this->panierCerises as $Cerise) {
            $affich .= $Cerise;
        }
        return  $affich;
    }
}
