<?php
class Maison
{


    private static $prochainIdentifiantMaison = 1;
    private static $tabMaisons = [];


    private $idMaison;
    private $dateCreationMaison;
    private $nbrChambresMaison;
    private $surfaceMaison;

    function __construct($dateCreationMaison, $nbrChambresMaison, $surfaceMaison)
    {
        $this->dateCreationMaison = $dateCreationMaison;
        $this->nbrChambresMaison = $nbrChambresMaison;
        $this->surfaceMaison = $surfaceMaison;

        $this->idMaison = self::$prochainIdentifiantMaison;
        self::$prochainIdentifiantMaison++;
        self::$tabMaisons[] = $this;
    }

    public  function getIdMaison()
    {
        return $this->idMaison;
    }
    public  function getDateCreationMaison()
    {
        return $this->dateCreationMaison;
    }
    public  function getNbrChambresMaison()
    {
        return $this->nbrChambresMaison;
    }
    public  function getSurfaceMaison()
    {
        return $this->surfaceMaison;
    }



    public static function afficheMaisonsDansTab()
    {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">#</th>';
        echo '<th scope="col">Date</th>';
        echo '<th scope="col">Nombre de Chambre</th>';
        echo '<th scope="col">Surface</th>';
        echo '</tr>';
        echo '</thead>';
        foreach (self::$tabMaisons as $key => $maison) {
            echo '<tbody>';
            echo '<tr>';
            echo '<th scope="row">' . $maison->getIdMaison() . '</th>';
            echo '<td>' . $maison->getDateCreationMaison() . '</td>';
            echo '<td>' . $maison->getNbrChambresMaison() . '</td>';
            echo '<td>' . $maison->getSurfaceMaison() . '</td>';
            echo '</tr>';
            echo '</tbody>';
        }
        echo '</table>';
    }
}