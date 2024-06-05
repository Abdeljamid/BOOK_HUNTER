<?php 

// ROUTER PRINCIPAL 

//ROUTE DES BOOKS 
//PATTERN: /?books
//CTRL: booksController
//ACTION : indexAction
if (isset($_GET['books'])) :
    include_once '../app/controllers/booksController.php';
    \App\Controllers\BooksController\indexAction($connexion);


//ROUTE DES AUTHORS 
//PATTERN: /?authors
//CTRL: authorsController
//ACTION : indexAction
elseif (isset($_GET['authors'])) :
    include_once '../app/controllers/authorsController.php';
    \App\Controllers\authorsController\indexAction($connexion);


// ROUTE PAR DEFAUT 
// PATTERN: /
// CTRL : pagesController 
// ACTION : homeAction
else : 
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);


endif;