<?php


class MonPdoClass
{

    private const HOST_NAME = "localhost";
    private const DB_NAME = "animaux_bdd";
    private const USER_NAME = "root";
    private const PWD = "";

    private static $monPDOinstance = null;

    public static function getPdo()
    {
        if (is_null(self::$monPDOinstance)) {
            try {
                $connexion = 'mysql:host=' . self::HOST_NAME . ';dbname=' . self::DB_NAME;
                self::$monPDOinstance = new PDO($connexion, self::USER_NAME, self::PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                $message = "erreur de connexion à la DB " . $e->getMessage();
                die($message);
            }
            self::$monPDOinstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$monPDOinstance;
    }
}




    // $dsn = 'mysql:dbname=animaux_bdd;host=localhost';
    // $user = 'root';
    // $password = '';

    // $option =  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    // try {
    //     $pdo = new PDO($dsn, $user, $password);
    // } catch (PDOException $e) {
    //     echo "pb connexion BDD (class/MonPdo.class.php)";
    // }

    // echo "ok";

    // $req = "SELECT * FROM animal";
    // $stmt = $pdo->prepare($req);
    // $stmt->execute();
    // $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($animaux);