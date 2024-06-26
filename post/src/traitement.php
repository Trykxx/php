<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['pswd']) && !empty($_POST['name']) && !empty($_POST['pswd'])) {

        $nom = $_POST['name'];
        $password = $_POST['pswd'];

        $nom = trim($nom);
        $password = trim($password);

        echo '<br>';
        echo 'çaaaa maaaaarche !';
        echo '<br>';
        var_dump($nom);
        echo '<br>';
        var_dump($password);

        $password_hache = password_hash($password, PASSWORD_DEFAULT);
        echo $password_hache;

        // Cookie
        setcookie('connecte', true, time() + 60 * 60 * 24, "/");

        // Message de session
        $_SESSION['message'] = 'Connexion réussie!';

        // Redirection vers index.php après traitement
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION['message'] = 'Erreur de connexion';
        echo $_SESSION['message'];
    }
} else {
    $_SESSION['message'] = 'Mauvaise méthode de requête';
    echo $_SESSION['message']; // Affichez le message d'erreur dans le contexte actuel
}
?>
