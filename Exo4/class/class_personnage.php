<?php
class Personnage
{
    private static $tabPersonnages = [];

    private $nom;
    private $img;
    private $age;
    private $sexe;
    private $force;
    private $agilite;

    const HOMME = true;
    const FEMME = false;

    function __construct($nom, $img, $age, $sexe, $force, $agilite)
    {
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        self::$tabPersonnages[] = $this;
    }

    function getNom()
    {
        return $this->nom;
    }
    function getImg()
    {
        return $this->img;
    }
    function getAge()
    {
        return $this->age;
    }
    function getSexe()
    {
        return $this->sexe;
    }
    function getForce()
    {
        return $this->force;
    }
    function getAgilite()
    {
        return $this->agilite;
    }


    function setNom($nom)
    {
        $this->nom = $nom;
    }
    function setImg($img)
    {
        $this->img = $img;
    }
    function setAge($age)
    {
        $this->age = $age;
    }

    public function affichInfos()
    {

        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Age : </b/>" . $this->age . "<br/>";
        echo "<b>Sexe</b> : ";
        if ($this->sexe) {
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force </b>: " . $this->force . "<br/>";
        echo "<b>Aagilite </b>: " . $this->agilite . "<br/>";
    }

    public function affichImageEtInfo()
    {
        echo "<div class='gauche'>";
        echo "<img src='sources/images/" . $this->img . "'>";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->affichInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    public static function getListePersonnage()
    {
        return self::$tabPersonnages;
    }
}
