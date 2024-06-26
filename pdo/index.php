<!-- Creer une base de données library_db-->
<!-- Creer une table book -->
<!-- id,nom,description,annee_parution, id_auteur ( clé etrangere )-->

<!-- Creer une table author -->
<!-- id,nom,prenom,pays_origine,date_naissance -->

CREATE TABLE author(
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255),
prenom VARCHAR(255),
pays_origine VARCHAR(255),
date_naissance DATE
);

CREATE TABLE book(
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(255),
description VARCHAR(255),
annee_parution YEAR,
id_auteur INT,
FOREIGN KEY (id_auteur) REFERENCES author(id)
);
<!-- inserer des données -->
<!-- 1à livres et 4 auteurs -->

INSERT INTO book (nom, description, annee_parution, id_auteur)
VALUES
('The Old Man and the Sea', 'A classic novella about an old fisherman\'s struggle with a marlin.', 1952, 1),
('For Whom the Bell Tolls', 'An exploration of honor, sacrifice, and love during the Spanish Civil War.', 1940, 1),
('War and Peace', 'Epic novel set during the Napoleonic Wars in Russia.', 1869, 2),
('Anna Karenina', 'Tragic love story of a married aristocrat and her affair with the affluent Count Vronsky.', 1877, 2),
('Pride and Prejudice', 'Romantic novel revolving around the lives of the Bennet sisters.', 1813, 3),
('Sense and Sensibility', 'A tale of two sisters and their contrasting personalities in love and life.', 1811, 3),
('One Hundred Years of Solitude', 'Magical realist novel chronicling the Buendía family over generations.', 1967, 4),
('Love in the Time of Cholera', 'Story of unrequited love and enduring passion over decades.', 1985, 4),
('Chronicle of a Death Foretold', 'Investigation into the circumstances surrounding a murder in a small Colombian town.', 1981, 4),
('Of Love and Other Demons', 'A tale of love, illness, and religious fervor set in 18th-century South America.', 1994, 4);


INSERT INTO author (nom, prenom, pays_origine, date_naissance)
VALUES ('Hemingway', 'Ernest', 'USA', '1899-07-21'),
('Tolstoï', 'Léon', 'Russie', '1828-09-09'),
('Austen', 'Jane', 'Royaume-Uni', '1775-12-16'),
('Marquez', 'Gabriel Garcia', 'Colombie', '1927-03-06');

SELECT book.nom, author.nom FROM book INNER JOIN author ON id_auteur = author.id;

SELECT author.nom AS auteur, COUNT(*) AS nombre_livres FROM author INNER JOIN book ON id_auteur = author.id GROUP BY id_auteur;