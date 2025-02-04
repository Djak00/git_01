<?php

$dsn = 'mysql:dbname=bdd_catalogue_produits;host=localhost';
$user = 'root';
$password = '';


try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "pb connexion BDD (class/MonPdo.class.php)";
}
