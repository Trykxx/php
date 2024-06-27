<?php
include_once './src/repository/book.php';
?>
<!-- <pre>
<?php print_r($books); ?>
</pre> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librairie</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <!-- Afficher tous les livres dans une div qui aura un h2 avec le titre du livre et un paragraphe avec la description et un autre paragraphe avec la date de parution -->

    <div class="container">
        <?php
        foreach ($books as $livre) { ?>
            <div class="card">
                <h2><?= $livre['nom'] ?></h2>
                <p><?= mb_strimwidth($livre['description'], 0, 20, '...') ?></p>
                <p><?= $livre['annee_parution'] ?></p>
                <a href="./detail.php?id=<?=$livre['id']?>">Voir plus</a>
            </div>
        <?php } ?>
    </div>

</body>

</html>