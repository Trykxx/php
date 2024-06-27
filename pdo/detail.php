<?php
require_once './src/config/bdd.php';

$res = $pdo->prepare("SELECT * FROM book INNER JOIN author ON id_auteur = author.id WHERE book.id= :cheval");
$res->bindParam(':cheval',$_GET['id'],PDO::PARAM_INT);
$res->execute();
$books = $res->fetch();
?>

<pre>
<?php print_r($books); ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
    <a href="./index.php">Retour</a>
    <h1>Detail du livre</h1>

    <div>
        <h2><?= $books['description'] ?></h2>
        <p></p>
        <p></p>
        <p></p>
    </div>
</body>
</html>

