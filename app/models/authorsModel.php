<?php 

namespace App\Models\AuthorsModel;

use \PDO;

function findAll (PDO $connexion): array {

    $sql= "SELECT*
        FROM authors a
        JOIN books b ON a.id = b.author_id
        JOIN users_notations un ON un.book_id = b.id
        ORDER BY note DESC
        LIMIT 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    

}