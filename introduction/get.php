<?php
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['adresse'])) {
    $nom = urldecode($_GET['nom']);
    $nom = htmlspecialchars($nom);

    $prenom = urldecode($_GET['prenom']);
    $prenom = htmlspecialchars($prenom);

    $adresse = urldecode($_GET['adresse']);
    $adresse = htmlspecialchars($adresse);
}
?>













<p>Bonjour, mon prenom est <?= $_GET['prenom'] ?>, mon nom est <?= $_GET['nom'] ?> et j'habite au <?= $_GET['adresse'] ?></p>

<!-- htmlspecialchars -> est utilisé pour échapper les caractères spéciaux dans la chaîne de caractères, ce qui protège contre les attaques XSS. -->
<!-- isset() verifie si la valeur existe -->