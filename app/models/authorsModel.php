<?php

namespace App\Models\AuthorsModels;

use \PDO;

function findAll(PDO $connexion): array
{

    $sql = "SELECT *
            FROM authors
            ORDER BY created_at DESC
            LIMIT 2;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
