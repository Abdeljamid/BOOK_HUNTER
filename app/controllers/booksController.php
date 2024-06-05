<?php 

namespace App\Controllers\BooksController;

use \PDO;

function indexAction(PDO $connexion){
    // demande données aux modèles 
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);

    // chargement de la vue 'index' dans $content 
    global $content, $title;
    $title = "Catalogue";
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
}