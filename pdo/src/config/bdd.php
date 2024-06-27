<?php

// L'extension PDO, pour PHP Data Object, définit une interface pour accéder a une base de données depuis PHP et permet d'exécuter des requetes SQL.

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=library_db', // driver mysql, serveur de la BDD (host),nom de la BDD(dbname)
        'root', // Nom d'utilisateur
        '', // mot de passe
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] // on affiche les erreurs
        );
} catch (Exception $e) {
    die('Erreur:' . $e->getMessage());
}

?>