<?php 

namespace App\Models\AuthorsModel;

use \PDO;

function findAll (PDO $connexion, int $limit = 6 ): array {

    $sql= "SELECT*
        FROM authors a
        JOIN books b ON a.id = b.author_id
        JOIN users_notations un ON un.book_id = b.id
        ORDER BY note DESC
        LIMIT :limit;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetchall(PDO::FETCH_ASSOC);
   
    

}