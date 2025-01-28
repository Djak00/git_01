<?php
class Arme
{

    private $nomArme;
    private $imageArme;
    private $descriptionArme;

    public function __construct($nomArme, $imageArme, $descriptionArme)
    {

        $this->nomArme = $nomArme;
        $this->imageArme = $imageArme;
        $this->descriptionArme = $descriptionArme;
    }

    public function getNomArme()
    {
        return $this->nomArme;
    }
    public function getImageArme()
    {
        return $this->imageArme;
    }
    public function getDescriptionArme()
    {
        return $this->descriptionArme;
    }

    public function setNomArme($nomArme)
    {
        $this->nomArme = $nomArme;
    }
    public function setImageArme($imageArme)
    {
        $this->imageArme = $imageArme;
    }
    public function setDescriptionArme($descriptionArme)
    {
        $this->descriptionArme = $descriptionArme;
    }



    function __toString()
    {
        $txt = "<div class='row align-items-center'>";
        $txt .= "<div class='col-3 text-center'>";
        $txt .= "<img src='sources/" . $this->imageArme . "'><br/>";
        $txt .= "</div>";
        $txt .= "<div class='col-auto '>";
        $txt .= "<h4>" . $this->nomArme . "</h4>";
        $txt .= "<p>" . $this->descriptionArme . "</p>";
        $txt .= "</div>";
        $txt .= "</div>";

        return $txt;
    }
}