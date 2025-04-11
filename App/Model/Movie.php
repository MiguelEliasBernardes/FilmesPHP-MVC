<?php

require_once __DIR__ . '/../../config/db.php';
class Movie{

    public function GetMovies(?string $search = null) : array{
        
        $pdo = db::Connection();

        if($search){
            $query = "SELECT id_movie, name, image, category, movie.description, year, AVG(REPLACE(score, ',', '.') + 0) AS score FROM movie 
            LEFT JOIN review ON movie.id_movie = review.movie_id WHERE name LIKE '%$search%'
            GROUP BY 
                movie.id_movie, 
                movie.name, 
                movie.image, 
                movie.category, 
                movie.description, 
                movie.year";
                
        }else{
            $query = "SELECT id_movie, name, image, category, movie.description, year, AVG(REPLACE(score, ',', '.') + 0) AS score FROM movie
            LEFT JOIN review ON movie.id_movie = review.movie_id
            GROUP BY 
                movie.id_movie, 
                movie.name, 
                movie.image, 
                movie.category, 
                movie.description, 
                movie.year";
        }

        $query_prepare = $pdo->prepare($query);

        $query_prepare->execute();

        $result = $query_prepare->fetchAll();

        $pdo = null;

        return $result;
    }




}