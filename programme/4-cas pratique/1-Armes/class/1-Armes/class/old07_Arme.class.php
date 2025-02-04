<?php
class Arme
{

    private $nomArme;
    private $lvlArme;
    private $maxLvlArme;
    private $descriptionArme;

    public function __construct($nomArme, $descriptionArme, $maxLvlArme)
    {

        $this->nomArme = $nomArme;
        $this->lvlArme =  1;
        $this->maxLvlArme = $maxLvlArme;
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
        $txt .= "<img src='sources/" . $this->enleveAccentNomArme() . "/" . $this->enleveAccentNomArme() . $this->selectSelonLvl() . ".png'><br/>";
        $txt .= "</div>";
        $txt .= "<div class='col-1 '>";

        $txt .= '<form action="#" method="get" onchange=submit() >';
        $txt .= '<select name="nbrLvl' . $this->getNomArme() . '" id="nbrLvl">';
        $txt .= '<option value=""></option>';
        for ($i = 1; $i <= $this->maxLvlArme; $i++) {

            $txt .= '<option value=' . $i . '>' . $i . '</option>';
        }

        $txt .= '</select>';
        $txt .= '</form>';
        $txt .= "</div>";
        $txt .= "<div class='col-8 '>";
        $txt .= "<h4>" . $this->nomArme . "</h4>";
        $txt .= "<p>" . $this->descriptionArme . "</p>";
        $txt .= "</div>";
        $txt .= "</div>";

        return $txt;
    }

    public  function enleveAccentNomArme()
    {
        $lettresAvecAccent = ["é"];
        $resultat = str_replace($lettresAvecAccent, "e", $this->getNomArme());
        return $resultat;
    }

    public  function selectSelonLvl()
    {


        if (isset($_GET["nbrLvl" . $this->getNomArme() . ""]) && !empty($_GET["nbrLvl" . $this->getNomArme() . ""])) {
            return $_GET["nbrLvl" . $this->getNomArme() . ""];
        } else {
            return 1;
        }
    }
}
