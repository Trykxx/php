<?php

function connectDB()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=library_db', 'root', '', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
        exit;
    }
}

//? try tente d'etablir une connexion a la bdd

//? new PDO cree une nouvelle instance de PDO ( PHP Data Objects);
// Elle prend plusieurs parametres.
    //- la chaine de caracteres indique :
        // 1. le type de base de données, ( ici mysql )
        // 2. le serveur sur lequel est hebergé la bdd ( ici localhost )
        // 3. Le nom de la bdd a laquelle on veut se connecter ( ici library_db )

    //- le nom d'utilisateur ( ici root )
    //- le mdp de l'utilisateur ( ici il y en a pas donc vide )

    // Un tableau associatif d'options pour configurer la PDO :
        //? PDO::ATTR_ERRMODE : Attribut de configuration pour definir le mode de gestion des erreurs
        //? PDO::ERRMODE_EXCEPTION : Valeur de l'attribut pour lancer des exceptions en cas d'erreur. Cela signifie que si une erreur survient, PDO lancera une exception PDOException au lieu de simplement émettre un avertissement ou de retourner false.

//? $e, $ex, $error, ou tout autre nom de votre choix. Cette variable contient l'objet de l'exception qui a été lancée.
    //? getMessage() : Méthode de l'objet d'exception pour obtenir le message d'erreur.
//? exit : arrete l'execution du script apres l'affichage de l'erreur