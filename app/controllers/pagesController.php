<?php 

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion){
    // demande données aux modèles 
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion, 3);

    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion, 3);
    // chargement de la vue 'home' dans $content 
    global $content, $tilte;
    $title = "Homepage";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}