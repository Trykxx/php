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
    <link rel="stylesheet" href="../assets/css/">
</head>

<body>
    <section class="container">
        <h1>Enregistrez un nouveau livre</h1>
        <form action="../src/traitement.php" method="post">
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
                    <?php foreach($authors as $author){?>
                        <option value="<?= $author['id']?>"><?= $author['nom']?> <?= $author['prenom']?></option>
                        <?php } ?>
                </select>
            </div>

            <input type="submit" value="Enregistrer">

            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>

        </form>
    </section>

</body>

</html>