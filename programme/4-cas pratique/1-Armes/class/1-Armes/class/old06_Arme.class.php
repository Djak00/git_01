<?php
class Arme
{

    private $nomArme;
    private $lvlArme;
    private $descriptionArme;

    public function __construct($nomArme, $descriptionArme)
    {

        $this->nomArme = $nomArme;
        $this->lvlArme =  1;
        $this->descriptionArme = $descriptionArme;
    }

    public function getNomArme()
    {
        return $this->nomArme;
    }
    public function getLvlArme()
    {
        return $this->lvlArme;
    }
    public function getDescriptionArme()
    {
        return $this->descriptionArme;
    }

    public function setNomArme($nomArme)
    {
        $this->nomArme = $nomArme;
    }
    public function setLvlArme($lvlArme)
    {
        $this->lvlArme = $lvlArme;
    }
    public function setDescriptionArme($descriptionArme)
    {
        $this->descriptionArme = $descriptionArme;
    }



    function __toString()
    {
        $txt = "<div class='row align-items-center'>";
        $txt .= "<div class='col-3 text-center'>";
        $txt .= "<img src='sources/" . $this->enleveAccentNomArme($this->nomArme) . "/" . $this->enleveAccentNomArme($this->nomArme) . $this->lvlArme . ".png'><br/>";
        $txt .= "</div>";
        $txt .= "<div class='col-auto '>";
        $txt .= "<h4>" . $this->nomArme . "</h4>";
        $txt .= "<p>" . $this->descriptionArme . "</p>";
        $txt .= "</div>";
        $txt .= "</div>";

        return $txt;
    }

    public  function enleveAccentNomArme($nomArme)
    {
        $lettresAvecAccent = ["é"];
        $resultat = str_replace($lettresAvecAccent, "e", $nomArme);
        return $resultat;
    }
}
