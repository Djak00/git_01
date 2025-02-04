<?php
class AnimalDaoClass
{

    public static function getAnimauxBD()
    {
        $pdo = MonPdoClass::getPdo();
        $req = "SELECT * FROM animal";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getTypeAnimal($idAnimal)
    {

        $pdo = MonPdoClass::getPdo();
        $req = "
        SELECT libelle
        FROM type t
        INNER JOIN animal a ON t.idType = a.idType
        WHERE a.idAnimal = :idAnimal
        ";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue("idAnimal", $idAnimal, PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultat['libelle'];
    }

    public static function getImagesAnimale($idAnimal)
    {

        $pdo = MonPdoClass::getPdo();
        $req = "
        SELECT libelle, url 
        FROM `image` 
        INNER JOIN image_animal ON image_animal.idImage = image.idImage
        WHERE image_animal.idAnimal = :idAnimal
        ";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue("idAnimal", $idAnimal, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
