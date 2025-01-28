<?php
session_start();



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



    public function __toString()
    {


        // Mise à jour de la session si une nouvelle valeur est envoyée via GET
        $sessionKey = "nbrLvl" . $this->nomArme;
        if (isset($_GET[$sessionKey]) && !empty($_GET[$sessionKey])) {
            $_SESSION[$sessionKey] = $_GET[$sessionKey];
        }

        // Récupérer la valeur actuelle de la session ou définir la valeur par défaut
        $currentLevel = $_SESSION[$sessionKey] ?? 1;








        $txt = "<div class='row align-items-center'>";
        $txt .= "<div class='col-3 text-center'>";
        $txt .= "<img src='sources/" . $this->enleveAccentNomArme() . "/" . $this->enleveAccentNomArme() . $this->selectSelonLvl() . ".png'><br/>";
        $txt .= "</div>";
        $txt .= "<div class='col-1 '>";

        $txt .= '<form action="#" method="get" onchange=submit() >';
        $txt .= '<select name="nbrLvl' . $this->nomArme . '" id="nbrLvl' . $this->nomArme . '">';

        for ($i = 1; $i <= $this->maxLvlArme; $i++) {
            $selected = ($i == $currentLevel) ? "selected" : "";
            $txt .= '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
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

    public   function selectSelonLvl()
    {
        $armeKey = "nbrLvl" . $this->getNomArme();

        // Si une valeur est envoyée via GET, on la stocke dans la session
        if (isset($_GET[$armeKey]) && !empty($_GET[$armeKey])) {
            $_SESSION[$armeKey] = $_GET[$armeKey]; // Stocker dans la session
            return $_GET[$armeKey];
        }

        // Sinon, on retourne la valeur stockée dans la session si elle existe
        if (isset($_SESSION[$armeKey])) {
            return $_SESSION[$armeKey];
        }

        // Par défaut, on retourne 1 si rien n'est défini
        return 1;
    }
}
