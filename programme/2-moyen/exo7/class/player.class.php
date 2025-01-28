<?php
include_once("class/player.class.php");
include_once("class/arme.class.php");
class Player
{


    private static $tabPlayers = [];


    private $nomPlayer;
    private $forcePlayer;
    private $pvPlayer;
    private $idArme;



    function __construct($nomPlayer, $forcePlayer, $pvPlayer, $idArme)
    {
        $this->nomPlayer = $nomPlayer;
        $this->forcePlayer = $forcePlayer;
        $this->pvPlayer = $pvPlayer;
        $this->idArme = $idArme;
        self::$tabPlayers[] = $this;
    }

    function __toString()
    {
        $res = "Nom : " . $this->nomPlayer . "<br>";
        $res .= "Force : " . $this->forcePlayer . "<br>";
        $res .= "PV : " . $this->pvPlayer . "<br>";
        $res .= "ID : " . $this->idArme . "<br>";
        $tabArmes = Arme::getTabArmes();
        foreach ($tabArmes as $key => $arme) {
            if ($arme->getIdArme() === $this->idArme) {
                $res .= $arme;
            }
        }
        return $res;
    }


    public static function getTabPlayers()
    {
        return self::$tabPlayers;
    }
}
