<?php
require_once("class/class_monPDO.php");
require_once("class/class_fruit.php");
require_once("class/class_panier.php");
require_once("class/manager_fruit.php");

class managerPanier
{
    // Récupère tous les paniers depuis la base de données
    public static function setPaniersFromDB()
    {
        $pdo = monPDO::getPDO(); // Récupération de l'instance PDO pour la connexion DB

        // Requête SQL pour récupérer les informations de base des paniers (ID et nom du client)
        $stmt = $pdo->prepare("SELECT p.id_panier, p.nom_client 
                               FROM panier p 
                               ");

        $stmt->execute(); // Exécute la requête

        $paniers = $stmt->fetchAll(); // Récupère tous les résultats sous forme de tableau associatif

        // Pour chaque panier récupéré, on crée une instance de la classe `Panier`
        foreach ($paniers as $panier) {
            Panier::$paniers[] = new Panier($panier['id_panier'], $panier['nom_client']);
        }
    }

    // Récupère les fruits d'un panier spécifique en fonction de son ID
    public static function getFruitPanier($id_panier)
    {
        $pdo = monPDO::getPDO(); // Récupération de l'instance PDO

        // Requête SQL pour récupérer les fruits appartenant au panier avec l'ID spécifié
        $req = "SELECT fruit.nom, fruit.poids, fruit.prix 
                FROM panier 
                INNER JOIN fruit ON fruit.fk_id_panier = panier.id_panier 
                WHERE panier.id_panier = :id";

        $stmt = $pdo->prepare($req); // Prépare la requête SQL
        $stmt->bindValue(":id", $id_panier, PDO::PARAM_INT); // Lie l'ID du panier au paramètre :id
        $stmt->execute(); // Exécute la requête

        return $stmt->fetchAll(); // Retourne tous les fruits sous forme de tableau associatif
    }

    public static function getNbPaniersDansDB()
    {

        $pdo = monPDO::getPDO(); // Récupération de l'instance PDO

        $req = "SELECT count(*) AS nbPanier 
                FROM panier";


        $stmt = $pdo->prepare($req);

        $stmt->execute();
        $resultat =  $stmt->fetch();
        return $resultat["nbPanier"];
    }

    static function insertInToDB($id_panier, $nom_client)
    {
        $pdo = monPDO::getPDO();
        $req = "INSERT INTO panier(id_panier, nom_client) VALUE (:id, :nom )";

        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":id", $id_panier, PDO::PARAM_INT); // Lie l'ID du panier au paramètre :id
        $stmt->bindValue(":nom", $nom_client, PDO::PARAM_STR);
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }


    public static function getpaniers()
    {
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("SELECT p.id_panier, p.nom_client 
                               FROM panier p 
                               ");

        $stmt->execute();

        return  $stmt->fetchAll();
    }


    public static function suprPanierFromDB($idPanier)
    {
        $pdo = monPDO::getPDO();

        try {
            // Commencer une transaction
            $pdo->beginTransaction();

            // 1. Supprimer les fruits associés au panier
            $req1 = "DELETE FROM fruit WHERE fk_id_panier = :idPanier";
            $stmt1 = $pdo->prepare($req1);
            $stmt1->bindValue(":idPanier", $idPanier, PDO::PARAM_INT);
            $stmt1->execute();

            // 2. Supprimer le panier
            $req2 = "DELETE FROM panier WHERE id_panier = :idPanier";
            $stmt2 = $pdo->prepare($req2);
            $stmt2->bindValue(":idPanier", $idPanier, PDO::PARAM_INT);
            $stmt2->execute();

            // Valider la transaction
            $pdo->commit();
            return true;
        } catch (PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $pdo->rollBack();
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}
