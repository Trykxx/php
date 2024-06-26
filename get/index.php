<h1>Accueil</h1>

<!-- <a href="./produits.php?model=bmw&color=jaune&year=2018">Lien vers notre page BMW</a>
<br>
<a href="./produits.php?model=mercedes&color=bleu&year=2011">Lien vers notre page Mercedes</a>
<br>
<a href="./produits.php?model=renault&color=noir&year=2022">Lien vers notre page Renalut</a> -->



<?php function modeles($model, $color, $year)
{
?>
    <a href="<?= './produits.php?model=' . $model . '&color=' . $color . '&year=' . $year ?>"><?= 'lien vers la page ' . $model ?></a><br>

<?php
};

modeles('bmw', 'jaune', 2018);
modeles('mercedes', 'bleu', 2011);
modeles('renault', 'noir', 2022);
?>