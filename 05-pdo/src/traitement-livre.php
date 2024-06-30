<?php
session_start();

require_once '../src/config/db.php';
require_once './repository/bookRepository.php';

var_dump($_POST);
$_POST['year'] = intval($_POST['year']);
var_dump($_POST);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !isset($_POST['book']) ||
        !isset($_POST['description']) ||
        !isset($_POST['year']) ||
        !isset($_POST['author']) ||
        empty($_POST['book']) ||
        empty($_POST['description']) ||
        empty($_POST['year']) ||
        empty($_POST['author'])
    ) {
        $_SESSION['message'] = 'Veuillez recommencer';
        header('Location: ../view/addbook.php');
        exit();
    }

    $nom = $_POST['book'];
    $description = $_POST['description'];
    $annee = $_POST['year'];
    $auteur = $_POST['author'];

    trim($nom);
    trim($description);
    trim($annee);
    trim($auteur);

    if (!is_numeric($annee) || strlen($annee) != 4) {
        echo $_SESSION['message'] = "Erreur, Année de parution incorrecte";
    }

    $test = connectDB();
    insertBook($test, $nom, $description, $annee, $auteur);

    $_SESSION['message'] = 'Insertion réussie';
    header('Location: ../view/addbook.php');
    exit();
}
