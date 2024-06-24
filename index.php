<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction a PHP </title>
</head>

<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc de PHP, on utilise la balise ouvrante <?php
    // Pour fermer un bloc de PHP, on utilise la balise fermante :
    ?>

    <p>Je suis du HTML</p>

    <?php
    echo '<h2>Les commentaires</h2>';
    // Je suis un commentaire en PHP
    # Je suis aussi un comentaire en PHP
    /*
    Je suis un commentaire 
    sur plusieurs lignes
    */

    echo '<h2> Affichage </h2>';

    // echo est une instruction qui permet d'afficher du texte dans le navigateur
    echo 'Hello World';
    echo '<br>';

    // print est un équivalent a echo
    print 'Hello World';
    echo '<br>';


    // Déclaratio d'un variable avec le signe $
    $uneVariable;

    // Affectation d'une valeur a une variable
    $uneVariable = 127;

    //Affichage de la variable
    echo $uneVariable;
    echo '<br>';

    $prenom = 'Amit';

    echo 'Bonjour' . ' ' . $prenom;
    echo '<br>';

    echo "Bonjour $prenom";
    echo '<br>';

    echo "Bonjour {$prenom}";

    echo '<h2>Les types de variables</h2>';

    // Les chaines de caractères
    $unMessage = 'Salut tout le monde, je suis une variable';
    echo gettype($unMessage);
    echo '<br>';

    $unNombreEntier = 127;
    echo gettype($unNombreEntier);
    echo '<br>';

    $unNombreVirgule = 125.82;
    echo gettype($unNombreVirgule);
    echo '<br>';

    $unBooleen = true;
    echo gettype($unBooleen);
    echo '<br>';
    echo $unBooleen;
    echo '<br>';

    $uneVariableNull = null;
    echo gettype($uneVariableNull);
    echo '<br>';

    $unTableau = ['pomme', 'banane', 'fraise'];
    $unAutreTableau = array('pomme', 'banane', 'fraise');
    echo gettype($unTableau);
    echo '<br>';
    echo $unTableau[0];
    echo '<br>';


    $unTableauAssociatif = ['prenom' => 'Amit', 'nom' => 'Roig'];
    echo $unTableauAssociatif['nom'];
    echo '<br>';

    // phpinfo()
    ?>
    <pre>
        <?php var_dump($unTableauAssociatif); ?>
    </pre>


    <?php

    // Creer une fonction debug, un parametre
    // affiche les balises pre et la variable sera ce que l'on met dans le var-dump

    function debug($props){
        echo '<pre>';
        var_dump($props);
        echo '</pre>';
    }

    debug($unTableauAssociatif);

    echo'<h2> Les variables globales </h2>';

    debug($GLOBALS)
    ?>

</body>

</html>