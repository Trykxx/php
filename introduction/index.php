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

    function debug($props)
    {
        echo '<pre>';
        var_dump($props);
        echo '</pre>';
    }

    debug($unTableauAssociatif);

    echo '<h2> Les variables globales </h2>';

    // debug($_SERVER);

    debug($GLOBALS['prenom']);

    echo $_SERVER['REQUEST_TIME'] + 1235;

    echo '<h2> Les constantes et les constantes magiques </h2>';

    // Une constante permet de sauvegarder une valeur fixe
    // Utile pour conserver les parametres de la base de données
    // Par convention une constante se declare toujours en majuscule
    define('CAPITAL_PAYS', 'Paris');

    echo CAPITAL_PAYS;
    const PAYS = 'Algerie';
    echo '<br>';
    echo PAYS;
    echo '<br>';

    // Afficher la version de PHP

    echo PHP_VERSION;
    echo '<br>';

    // Afficher la valeur maximale d'un entier
    echo PHP_INT_MAX;
    echo '<br>';

    // Afficher la valeur minimale d'un entier
    echo PHP_INT_MIN;
    echo '<br>';

    // Afficher la ligne sur laquelle on est
    echo __LINE__;
    echo '<br>';

    // Afficher le chemin du fichier
    echo __FILE__;
    echo '<br>';

    // Afficher le dossier courant
    echo __DIR__;

    echo '<h2> Les tableaux associatifs </h2>';

    // declarer 3 variables bleu,blanc,rouge

    $bleu = 'bleu';
    $blanc = 'blanc';
    $rouge = 'rouge';

    // Afficher bleu,blanc,rouge
    echo "$bleu-$blanc-$rouge <br>";
    echo "{$bleu}-{$blanc}-{$rouge} <br>";
    echo $bleu . '-' . $blanc . '-' . $rouge . "<br>";

    // Déclarer un tableau associatif :
    /*
            prenom: Kenza
            nom : Mroudjae
            age: 23
            telephone : 06.58.86.94.65
        */

    $tableauPersonne = ['prenom' => 'Kenza', 'nom' => 'Mroudjae', 'age' => 23, 'telephone' => '06.58.86.94.65'];

    // Afficher Bonjour je m'appelle Kenza Mroudjae, j'ai 41 ans et mon numéro de telephone est le ...
    echo "Bonjour, je m'appelle" . ' ' . $tableauPersonne['prenom'] . ' ' . $tableauPersonne['nom'] . ',' . " j'ai" . ' ' . $tableauPersonne['age'] . ' ans et mon numéro de téléphone est le ' . $tableauPersonne['telephone'];

    echo '<br>';

    echo "Bonjour, je m'appelle {$tableauPersonne['prenom']} {$tableauPersonne['nom']}, j'ai {$tableauPersonne['age']} ans et mon numéro de téléphone est le {$tableauPersonne['telephone']}";

    echo '<br>';


    // Declarer un tableau d'animaux : chien,tigre,lion,aigle

    $animaux = ['chien', 'tigre', 'lion', 'aigle'];

    // Fonction qui transforme un tableau en chaine de caracteres

    // function arrayToString($array, $separator = ', ') {
    //     return implode($separator, $array);
    // };

    // Afficher mes animaux preferes sont : chien,tigre,lion,aigle
    // $string = arrayToString($animaux);
    echo "Mes animaux préférés sont :" . implode(', ', $animaux);

    echo "<h2> Les boucles </h2>";

    // Boucler sur le tableau d'animaux pour tous les afficher

    for ($i = 0; $i < count($animaux); $i++) {
        echo $animaux[$i] . '<br>';
    };

    foreach ($animaux as $animal) {
        echo $animal . '<br>';
    }

    foreach ($tableauPersonne as $key => $info) {
        echo $key . ' ' . $info . '<br>';
    }

    echo '<h2> Les fonctions prédéfinies </h2>';

    $texte = "Indiana Jones reçoit la visite surprise de sa filleule Helena Shaw, qui est à la recherche d'un artefact rare que son père a confié à Indiana par le passé : le fameux cadran d'Archimède, une relique qui aurait le pouvoir de localiser les fissures temporelles.";

    //extraire 100 premier caractere suivi de ...

    echo substr($texte, 0, 100) . '...' . '<br>';
    // ou
    echo mb_strimwidth($texte, 0, 100, '...') . '<br>';

    // Supprime les espaces au début et à la fin de la chaine de caractère
    $mail = '   edjek@gmail.com   ' . '<br>';
    echo trim($mail);

    // Remplace une chaine de caractère par une autre Paul par Rachid
    $message = "Bonjour, je m'appelle Paul. Je suis formateur";
    echo str_replace('Paul', 'Rachid', $message) . '<br>';

    // mettre en minuscule $message
    echo strtoupper($message) . '<br>';

    // mettre en minuscule $message
    echo strtolower($message) . '<br>';

    $vehicules = ['moto','velo','car','bus'];
    ?>

    <select name="" id="">
    <?php
    foreach ($vehicules as $element) { ?>
        <option value=<?= $element ?>><?= $element ?></option>;
    <?php } ?>
    </select>;

<!-- < ? = ouvre un bloc php et un echo en meme temps -->

    <?php
    echo "<select>";
    foreach ($vehicules as $element) {
        echo '<option value ="' . $element . '">' .  $element . '</option>';
    };
    echo "</select>"
    ?>

    <h2>Les inclusions de fichier</h2>

<?php

include './include.php';
require './include.php';

echo $doranco;


echo '<h2>$_GET</h2>'

?>

<?php
$nom = 'Roig Menda';
$nom = urlencode($nom);

$prenom = 'Amit Nicolas';
$prenom = urlencode($prenom);

$adresse = '2 guy de maupassant';
$adresse = urlencode($adresse);
?>

<a href="./get.php?prenom=<?=$prenom?>&nom=<?=$nom?>&adresse=<?=$adresse?>">lien vers la page get.php</a>




</body>

</html>