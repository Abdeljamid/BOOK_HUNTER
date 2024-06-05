<?php 

namespace App\Models\BooksModel;

use \PDO;

function findAll (PDO $connexion, int $limit = 6): array {

    $sql= "SELECT *, c.name AS categoriesName, t.name AS tagsName  
        FROM books b
        
        JOIN authors a ON a.id = b.author_id
        JOIN users_notations un ON un.book_id = b.id
        JOIN books_has_tags bht ON b.id = bht.book_id
        JOIN tags t ON t.id = bht.tag_id
        JOIN categories c ON b.id = c.id
        
        ORDER BY un.note DESC
        LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchall(PDO::FETCH_ASSOC);
    

}