<?php

function getAllBooks($pdo)
{
    $stmt = $pdo->query('SELECT * FROM book');
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // fetchAll psk on recupere toutes les lignes
}
function getBookDetailsById($pdo, $bookId)
{
    $stmt = $pdo->prepare( //prepare empece les injections sql. ici on a un risque car on a un parametre exterieur ':bookId'
        'SELECT book.*, author.nom, author.prenom, author.date_naissance, author.pays_origine
        FROM book
        JOIN author ON book.id_auteur = author.id
        WHERE book.id = :bookId'
    );
    $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC); // fetch simple car on recupere une seule ligne
}

function insertBook($pdo,$nom_livre,$description_livre,$annee_livre,$id_auteur){
    $stmt = $pdo->prepare(
        "INSERT INTO book
        (nom,description,annee_parution,id_auteur)
        VALUES
        (:titre,:description,:annee,:id)"
    );

    $stmt->bindParam(':titre',$nom_livre);
    $stmt->bindParam(':description',$description_livre);
    $stmt->bindParam(':annee',$annee_livre);
    $stmt->bindParam(':id',$id_auteur,PDO::PARAM_INT);

    $stmt->execute();
}

// getAllBooks : La fonction prend un paramètre $pdo qui est un objet de connexion à la base de données. Ce paramètre permet à la fonction d'exécuter des requêtes SQL sur la base de données spécifiée.
    // $pdo : prend un paramètre $pdo qui est un objet de connexion à la base de données. Ce paramètre permet à la fonction d'exécuter des requêtes SQL sur la base de données spécifiée. Il peut avoir le nom qu'on veut.
    // fetchAll va retourner toutes les lignes dui tableau et PDO::FETCH_ASSOC specifie de les retouner sous forme de tableau associatif.