<?php



class Fruit
{

    // -----------------------------methode de classe----------------------------------------------------
    private static $fruits = [];
    private static $prochainIdentifiant = 1;

    // -----------------------------declare variable----------------------------------------------------
    private $img;
    private $nom;
    private $poid;
    private $prix;
    private $identifiant;


    const POMME = "Pomme";
    const CERISE = "Cerise";



    const POMMEIMG = "apple.png";
    const CHERRYIMG = "cherry.png";
    // -----------------------------CONSTRUC pr afficher variable----------------------------------------------------
    function __construct($img, $nom, $poid, $prix)
    {
        $this->img = $img;
        $this->nom = $nom;
        $this->poid = $poid;
        $this->prix = $prix;
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant++;
        // --------------pr preciser que tout ca est le tableau $fruit--------------------------------
        self::$fruits[] = $this;
    }
    // -----------------------------GETTER pr voir affich attributs----------------------------------------------------
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
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    // -----------------------------SETTER pr modif attributs----------------------------------------------------
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPoid($poid)
    {
        $this->poid = $poid;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    // -----------------------------PUBLIC function d'OBJETS pr tlm affich tout----------------------------------------------------

    public function affichAttributs()
    {

        echo "<img src='sources/images/" . $this->img . "'>";
        echo "<br/>";
        echo "Nom : " . $this->nom;
        echo "<br/>";
        echo "Poid : " . $this->poid;
        echo "<br/>";
        echo "Prix : " . $this->prix;
        echo "<div class='clearB'></div>";
        echo "----------------------------------------------";
        echo "<br/>";
    }
    // -----------------------------PUBLIC function static de CLASS pr tlm----------------------------------------------------

    public static function getTabFruits()
    {
        return self::$fruits;
    }


    public function __toString()
    {
        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poid . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    private function getAffichageIMG()
    {
        if ($this->nom === self::POMME) {
            return "<img src ='sources/images/" . self::POMMEIMG . "' alt='image pomme' /> <br/>";
        } else if ($this->nom === self::CERISE) {
            return "<img src ='sources/images/" . self::CHERRYIMG . "' alt='image cerise' /><br/>";
        }
    }
}





?>
<!-- ---------------------------CORECTION------------------------------ -->

<!-- class Fruit{
    private $nom;
    private $poids;
    private $prix;

    const POMME = "pomme";
    const CERISE = "cerise";

    const POMMEIMG = "apple.png";
    const CHERRYIMG = "cherry.png";

    public function __construct($nom,$poids){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);
    }

    private function getPrixFruits($nom){
        if($nom === self::POMME){
            return 15;
        } else if($nom === self::CERISE){
            return 20;
        }
    }

    public function __toString(){
        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poids . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    private function getAffichageIMG(){
        if($this->nom === self::POMME){
            return "<img src ='sources/images/".self::POMMEIMG."' alt='image pomme' /> <br/>";
        } else if ($this->nom === self::CERISE){
            return "<img src ='sources/images/".self::CHERRYIMG."' alt='image cerise' /><br/>";
        }
    }

} -->