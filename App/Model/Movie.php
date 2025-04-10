<?php

require_once __DIR__ . '/../../config/db.php';
class Movie{

    public function GetAllFilms() : array{
        
        $pdo = db::Connection();

        $query = "SELECT * FROM movie";

        $query_prepare = $pdo->prepare($query);

        $query_prepare->execute();

        $result = $query_prepare->fetchAll();

        $pdo = null;

        return $result;
    }



}