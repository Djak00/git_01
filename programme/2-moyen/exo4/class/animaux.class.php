<?php
class Animale
{
    public $nom;
    public $age;
    public $type;


    public function __construct($nom, $age, $type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }
}
