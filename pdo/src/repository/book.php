<?php

require_once './src/config/bdd.php';

// var_dump($pdo);

$res = $pdo->prepare("SELECT * FROM book");
$res->execute();
$books = $res->fetchAll();





// print_r($books);