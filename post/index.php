<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_SESSION['message'])) {?>
    <p style="color:green"><?=$_SESSION['message']?></p>
<?php
    unset($_SESSION['message']);
}
?>
<?php
if (isset($_COOKIE['connecte'] ) && $_COOKIE['connecte'] == true) {
    echo 'okkkkkkkkkkkkkkkkkkkkk';
    unset($_COOKIE['connecte']);
}
?>


    <form action="./src/traitement.php" method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="pswd">Mot de passe</label>
            <input type="password" id="pswd" name="pswd">
        </div>
        <input type="submit" value="envoyer">
    </form>

</body>
</html>