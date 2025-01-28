<?php
include_once("class/player.class.php");
include_once("class/arme.class.php");
class Arme
{


    private static $prochainIdentifiantArme = 1;
    private static $tabArmes = [];


    private $idArme;
    private $nomArme;
    private $nbrDegatsArme;

    function __construct($nomArme, $nbrDegatsArme)
    {
        $this->nomArme = $nomArme;
        $this->nbrDegatsArme = $nbrDegatsArme;


        $this->idArme = self::$prochainIdentifiantArme;
        self::$prochainIdentifiantArme++;
        self::$tabArmes[] = $this;
    }



    public  function getIdArme()
    {
        return $this->idArme;
    }

    public static function getTabArmes()
    {
        return self::$tabArmes;
    }


    function __toString()
    {
        $res = "Nom : " . $this->nomArme . "<br>";
        $res .= "Degat : " . $this->nbrDegatsArme . "<br>";

        return $res;
    }
}
