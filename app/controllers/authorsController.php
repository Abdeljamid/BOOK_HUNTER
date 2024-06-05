<?php 

namespace App\Controllers\AuthorsController;

use \PDO;

function indexAction(PDO $connexion){
    // demande données aux modèles 
    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    // chargement de la vue 'index' dans $content 
    global $content, $title;
    $title = "Auteurs";
    ob_start();
    include '../app/views/authors/_index.php';
    $content = ob_get_clean();
}