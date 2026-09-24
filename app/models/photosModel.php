<?php

namespace App\Models\PhotosModels;

use \PDO;

function findAll(PDO $connexion): array
{

    $sql = "SELECT *
            FROM photos
            ORDER BY created_at DESC
            LIMIT 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
