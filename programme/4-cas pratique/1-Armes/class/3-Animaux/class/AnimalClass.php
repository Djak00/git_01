<?php
require_once("class/MonPdo.php");

//--------------------------------------------------

class AnimalClass
{
    public static $tabAnimaux = [];

    private $idAnimal;
    private $nomAnimal;
    private $ageAnimal;
    private $sexeAnimal;
    private $typeAnimal;
    private $tabImagesAnimal = [];



    //--------------------------------------------------

    function __construct($idAnimal, $nomAnimal, $ageAnimal, $sexeAnimal, $typeAnimal, $tabImagesAnimal)
    {
        $this->idAnimal = $idAnimal;
        $this->nomAnimal = $nomAnimal;
        $this->ageAnimal = $ageAnimal;
        $this->sexeAnimal = $sexeAnimal;
        $this->typeAnimal = $typeAnimal;
        $this->tabImagesAnimal = $tabImagesAnimal;

        self::$tabAnimaux[] = $this;
    }

    //--------------------------------------------------

    public function getIdAnimal()
    {
        return $this->idAnimal;
    }
    public function getNomAnimal()
    {
        return $this->nomAnimal;
    }
    public function getAgeAnimal()
    {
        return $this->ageAnimal;
    }
    public function getSexeAnimal()
    {
        return $this->sexeAnimal;
    }
    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }
    public function getTabImagesAnimal()
    {
        return $this->tabImagesAnimal;
    }

    //--------------------------------------------------

    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;
    }
    public function setNomAnimal($nomAnimal)
    {
        $this->nomAnimal = $nomAnimal;
    }
    public function setAgeAnimal($ageAnimal)
    {
        $this->ageAnimal = $ageAnimal;
    }
    public function setSexeAnimal($sexeAnimal)
    {
        $this->sexeAnimal = $sexeAnimal;
    }
    public function setTypeAnimal($typeAnimal)
    {
        $this->typeAnimal = $typeAnimal;
    }
    public function setTabImagesAnimal($tabImagesAnimal)
    {
        $this->tabImagesAnimal = $tabImagesAnimal;
    }

    //--------------------------------------------------


}
