<!-- Formulaire pour ajouter un nouveau livre -->
<?php
session_start();

require_once '../src/config/db.php';
require_once '../src/repository/authorRepository.php';

$pdo = connectDB();
$authors = getAllAuthors($pdo);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php 
    include '../template/header.php'
    ?>

    <div>
        <h2>Enregistrez un nouveau livre</h2>
        <form action="../src/traitement-livre.php" method="post">
            <div>
                <label for="book">Titre</label>
                <input type="text" id="book" name="book">
            </div>
            <div>
                <label for="description">description</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div>
                <label for="year">Année de parution</label>
                <input type="number" id="year" name="year" step="1" min="0" max="9999">
            </div>
            <div>
                <label for="author">Nom de l'auteur</label>
                <select name="author" id="author">
                    <?php foreach ($authors as $author) { ?>
                        <option value="<?= $author['id'] ?>"><?= $author['nom'] ?> <?= $author['prenom'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <input type="submit" value="Enregistrer">

            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            } ?>

        </form>
    </div>
    <div>
        <h2>Enregistrez un nouvel auteur</h2>
        <form action="../src/traitement-auteur.php" method="post">
            <div>
                <label for="last_name">Nom</label>
                <input type="text" id="last_name" name="last_name">
            </div>
            <div>
                <label for="first_name">Prenom</label>
                <input type="text" id="first_name" name="first_name">
            </div>
            <div>
                <label for="country">Pays d'origine</label>
                <input type="text" id="country" name="country">
            </div>
            <div>
                <label for="date">Date de naissance</label>
                <input type="date" id="date" name="date">
            </div>

            <input type="submit" value="Enregistrer">

            <?php
            if (isset($_SESSION['messageAuthor'])) {
                echo $_SESSION['messageAuthor'];
                unset($_SESSION['messageAuthor']);
            } ?>

        </form>
    </div>

    <a href="../index.php">Accueil</a>

</body>

</html>