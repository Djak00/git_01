<?php
require_once("class/class_monPDO.php");
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/manager_fruit.php");
require_once("class/manager_panier.php");
class managerFruit
{



    public static function setFruitsFromDB()
    {
        // Étape 1 : Récupération de l'instance PDO
        // On utilise la méthode statique `getPDO()` de la classe `monPDO` pour obtenir une connexion à la base de données.
        // Cela permet de centraliser la gestion de la connexion à la base de données.
        $pdo = monPDO::getPDO();

        // Étape 2 : Préparation de la requête SQL
        // On écrit une requête SQL qui récupère les informations des fruits et les associe à leurs paniers via une jointure INNER JOIN.
        // Les alias `AS` permettent de renommer les colonnes pour une meilleure lisibilité dans les résultats.
        $stmt = $pdo->prepare("
            SELECT 
                f.nom AS Nom,          -- Le nom du fruit, aliasé en 'Nom'
                f.poids AS Poids,      -- Le poids du fruit, aliasé en 'Poids'
                f.prix AS Prix,        -- Le prix du fruit, aliasé en 'Prix'
                p.nom_client AS Client -- Le nom du client associé au panier, aliasé en 'Client'
            FROM 
                fruit f
                 INNER JOIN 
                panier p 
            ON 
                f.fk_id_panier = p.id_panier -- Condition de jointure : associer le fruit à son panier via les IDs
        
           ");

        // Étape 3 : Exécution de la requête
        // La méthode `execute()` exécute la requête préparée.
        $stmt->execute();

        // Étape 4 : Récupération des résultats
        // La méthode `fetchAll()` retourne tous les résultats sous forme de tableau associatif.
        // Chaque ligne est représentée comme un tableau associatif avec les clés définies par les alias (Nom, Poids, Prix, Client).
        $fruits = $stmt->fetchAll();

        // Étape 5 : Conversion des résultats en objets `fruit`
        // Pour chaque résultat, on crée une instance de la classe `fruit` en utilisant les données récupérées.
        // Ces objets sont ajoutés au tableau statique `fruit::$fruits`.
        foreach ($fruits as $fruit) {
            fruit::$fruits[] = new fruit($fruit['Nom'], $fruit['Poids'], $fruit['Prix']);
        }
    }

    public static function setFruitsFromDB2()
    {

        $pdo = monPDO::getPDO();

        $stmt = $pdo->prepare("
            SELECT 
                f.nom AS Nom,
                f.poids AS Poids, 
                f.prix AS Prix

            FROM 
                fruit f");

        $stmt->execute();

        $fruits = $stmt->fetchAll();

        foreach ($fruits as $fruit) {
            fruit::$fruits[] = new fruit($fruit['Nom'], $fruit['Poids'], $fruit['Prix']);
        }
    }

    public static function getNbFruitDansDB()
    {

        $pdo = monPDO::getPDO(); // Récupération de l'instance PDO

        $req = "SELECT count(*) AS nbFruit 
                FROM fruit";


        $stmt = $pdo->prepare($req);

        $stmt->execute();
        $resultat =  $stmt->fetch();
        return $resultat["nbFruit"];
    }

    static function insertInToDB($nom, $poid, $prix, $idPanier)
    {
        $pdo = monPDO::getPDO();
        $req = "INSERT INTO fruit  VALUE (:nom, :poid,:prix, :idPanier )";

        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":poid", $poid, PDO::PARAM_INT);
        $stmt->bindValue(":prix", $prix, PDO::PARAM_INT);
        $stmt->bindValue(":idPanier", $idPanier, PDO::PARAM_INT);
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }


    public static  function modifFruitDB($idFruitPrModif, $poidFruitPrModif, $prixFruitPrModif)
    {

        $pdo = monPDO::getPDO();

        $req = "UPDATE fruit  SET poids=:poid,prix=:prix WHERE nom=:id";

        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $idFruitPrModif, PDO::PARAM_STR);
        $stmt->bindValue(":poid", $poidFruitPrModif, PDO::PARAM_INT);
        $stmt->bindValue(":prix", $prixFruitPrModif, PDO::PARAM_INT);

        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }

    public static  function suprFruitDB($idFruitPrSupr)
    {

        $pdo = monPDO::getPDO();

        $req = "UPDATE fruit  SET fk_id_panier = null WHERE nom = :id";

        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $idFruitPrSupr, PDO::PARAM_STR);


        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }

    public static function getPanierFromFruit($nom)
    {

        $pdo = monPDO::getPDO(); // Récupération de l'instance PDO

        $req = "
            SELECT 
                f.nom AS Nom,          -- Le nom du fruit, aliasé en 'Nom'
                f.poids AS Poids,      -- Le poids du fruit, aliasé en 'Poids'
                f.prix AS Prix,        -- Le prix du fruit, aliasé en 'Prix'
                f.fk_id_panier AS Client -- Le nom du client associé au panier, aliasé en 'Client'
            FROM 
                fruit f
            INNER JOIN 
                panier p 
            ON 
                f.fk_id_panier = p.id_panier -- Condition de jointure : associer le fruit à son panier via les IDs
                where f.nom = :nom
       ";


        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);


        $stmt->execute();
        $resultat =  $stmt->fetch();
        if (empty($resultat)) {
            # code...
        } else {
            return $resultat["Client"];
        }
    }

    public static function updatePanier($nomFruit, $idPanier)
    {
        $pdo = monPDO::getPDO();

        $req = "UPDATE fruit  SET fk_id_panier=:idPanier WHERE nom = :nomFruit";

        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nomFruit", $nomFruit, PDO::PARAM_STR);
        $stmt->bindValue(":idPanier", $idPanier, PDO::PARAM_INT);


        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur dans updatePanier : " . $e->getMessage();
            return false;
        }
    }
}
