<?php

function getAllAuthors($conn)
{
    $stmt = $conn->query('SELECT * FROM author');
    return $stmt->fetchAll();
}

function insertAuthor($pdo,$nom_auteur,$prenom_auteur,$pays_auteur,$date_auteur){
    $stmt = $pdo->prepare(
        "INSERT INTO author
        (nom,prenom,pays_origine,date_naissance)
        VALUES
        (:nom,:prenom,:pays,:date)"
    );

    $stmt->bindParam(':nom',$nom_auteur);
    $stmt->bindParam(':prenom',$prenom_auteur);
    $stmt->bindParam(':pays',$pays_auteur);
    $stmt->bindParam(':date',$date_auteur);

    $stmt->execute();
}
