<?php
session_start();

require_once '../src/config/db.php';
require_once './repository/authorRepository.php';

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (
        !isset($_POST['last_name']) ||
        !isset($_POST['first_name']) ||
        !isset($_POST['country']) ||
        !isset($_POST['date']) ||
        empty($_POST['last_name']) ||
        empty($_POST['first_name']) ||
        empty($_POST['country']) ||
        empty($_POST['date'])
        ) {

        $_SESSION['messageAuthor'] = 'Erreur lors de la saisie des données';
        header('Location: ../view/addbook.php');
        exit();
    }

    $nom_auteur = $_POST['last_name'];
    $prenom_auteur = $_POST['first_name'];
    $pays_auteur = $_POST['country'];
    $date_auteur = $_POST['date'];

    trim($nom_auteur);
    trim($prenom_auteur);
    trim($pays_auteur);

    $bdd = connectDB();
    insertAuthor($bdd,$nom_auteur,$prenom_auteur,$pays_auteur,$date_auteur);

    $_SESSION['messageAuthor'] = 'Insertion réussie';
    header('Location: ../view/addbook.php');
    exit();
}