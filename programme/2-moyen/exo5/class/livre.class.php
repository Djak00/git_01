<?php
class Livre
{
    public static $tabLivres = [];
    private $nom;
    private $edition;
    private $auteur;
    private $date;

    public function __construct($nom, $edition, $auteur, $date)
    {
        $this->nom = $nom;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->date = $date;
        self::$tabLivres[] = $this;
    }

    function getNom()
    {
        return $this->nom;
    }
    function getEdition()
    {
        return $this->edition;
    }
    function getDate()
    {
        return $this->date;
    }

    public  function __toString()
    {
        $resultat = "Nom : " . $this->nom . "<br/>";
        $resultat .=  "Edition : " . $this->edition . "<br/>";
        $resultat .=  "Auteur : " . $this->auteur . "<br/>";
        $resultat .=  "Date : " . $this->date . "<br/>";
        return $resultat;
    }

    public static function affichAllLivres($tabLivres)
    {
        $tabLivres = self::$tabLivres;
        foreach ($tabLivres as $key => $livre) {
            echo "-----------------<br/>";
            echo $livre;
        }
        echo "-----------------<br/>";
    }



    public static function getLivreParEdition($edition)
    {
        self::$tabLivres;
        foreach (self::$tabLivres as $key => $livre) {
            if ($livre->getEdition() === $edition) {
                echo "-----------------<br/>";
                echo $livre;
            }
        }
    }

    public static function getParDateDeParution($date)
    {
        self::$tabLivres;
        foreach (self::$tabLivres as $key => $livre) {
            if ($livre->getDate() === (int)$date) {
                echo "-----------------<br/>";
                echo $livre;
            }
        }
    }

    // public static function getParDateDeParutionEtEdition($edition, $date)
    // {
    //     self::$tabLivres;
    //     foreach (self::$tabLivres as $key => $livre) {
    //         if ($livre->getEdition() === $edition && $livre->getDate() === $date) {
    //             echo "-----------------<br/>";
    //             echo $livre;
    //         }
    //     }
    // }

    public static function getParDateDeParutionEtEdition($tabLivres, $edition, $date)
    {
        self::$tabLivres;
        foreach (self::$tabLivres as $key => $livre) {
            if (($livre->getEdition() === $edition || $edition === "tous") && ($livre->getDate() === (int)$date || $date === "tous")) {
                echo "-----------------<br/>";
                echo $livre;
            }
        }
        echo "-----------------<br/>";
    }
}