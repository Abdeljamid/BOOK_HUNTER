<?php 

namespace App\Models\CategoriesModel;

use \PDO;

function findAll (PDO $connexion): array {

    $sql= "SELECT*
        FROM categories c
        ORDER BY name ASC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    

}