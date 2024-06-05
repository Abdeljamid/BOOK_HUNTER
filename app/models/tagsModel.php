<?php 

namespace App\Models\TagsModel;

use \PDO;

function findAll (PDO $connexion): array {

    $sql= "SELECT*
        FROM tags t
        ORDER BY name ASC
        ;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
}