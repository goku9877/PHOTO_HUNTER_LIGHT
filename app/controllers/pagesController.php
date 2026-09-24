<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion)
{
    // je vais demander des données aux modéles 

    include_once '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModels\findAll($connexion);

    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModels\findAll($connexion);

    // je charge la vue 'home' dans $content

    global $content, $title;
    $title = "HomePage";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
