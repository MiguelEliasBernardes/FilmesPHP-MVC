<?php

namespace App\Model;
use App\Config\db;
use LDAP\Result;

require_once __DIR__ . '/../../config/db.php';

class Movie{

    public function GetMovies(?string $search = null) : array{
        
        $conn = db::Connection();

        if($search){
            $query = "SELECT id_movie, movie.name, movie.image, movie.category, movie.description, movie.year, ROUND(AVG(REPLACE(score, ',', '.') + 0),1) AS score FROM movie 
            LEFT JOIN review ON movie.id_movie = review.movie_id WHERE name LIKE '%$search%'
            GROUP BY 
                movie.id_movie, 
                movie.name, 
                movie.image, 
                movie.category, 
                movie.description, 
                movie.year";
                
        }else{
            $query = "SELECT id_movie, movie.name, image, category, movie.description, year, ROUND(AVG(REPLACE(score, ',', '.') + 0),1) AS score FROM movie
            LEFT JOIN review ON movie.id_movie = review.movie_id
            GROUP BY 
                movie.id_movie, 
                movie.name, 
                movie.image, 
                movie.category, 
                movie.description, 
                movie.year";
        }

        $query_prepare = $conn->prepare($query);

        $query_prepare->execute();

        $result = $query_prepare->fetchAll();

        $conn = null;

        return $result;
    }


    public function GetUserMovies(?string $search = null) : array{

        $conn = db::Connection();
        
        $id = $_SESSION['user']['id'];
        

        if($search){
            $query = "SELECT movi.id_movie, movie.name, movie.image, movie.category, movie.description, movie.year, ROUND(AVG(REPLACE(score, ',', '.') + 0),1) AS score FROM user 
            INNER JOIN movie ON user.id = movie.user_id
            INNER JOIN review On review.movie_id = movie.id_movie
            WHERE name LIKE :search% AND user.id = :id
            GROUP BY 
                movie.id_movie, 
                movie.name, 
                movie.image, 
                movie.category, 
                movie.description, 
                movie.year";

        $query_prepare = $conn->prepare($query);
        $searchParam = '%' . $search . '%';
        $query_prepare->bindParam(':search', $searchParam, \PDO::PARAM_STR);
        $query_prepare->bindParam(':id', $id, \PDO::PARAM_INT);

        }else{
            $query = "SELECT movie.id_movie, movie.name, movie.image, movie.category, movie.description, movie.year, ROUND(AVG(REPLACE(score, ',', '.') + 0),1) AS score FROM user 
            INNER JOIN movie ON user.id = movie.user_id
            LEFT JOIN review On review.movie_id = movie.id_movie WHERE user.id = :id
            GROUP BY 
                movie.id_movie, 
                movie.name, 
                movie.image, 
                movie.category, 
                movie.description, 
                movie.year";

        $query_prepare = $conn->prepare($query);
        $query_prepare->bindParam(':id', $id, \PDO::PARAM_INT);
        }

        $query_prepare->execute();

        $result = $query_prepare->fetchAll(\PDO::FETCH_ASSOC);

        $conn = null;

        return $result;
    
    }


    public function add(?string $title, ?int $year, ?string $category, ?string $description, ?string $image, ?int $user_id) : bool{

        $conn = db::Connection();

        $sql = "INSERT INTO movie(name, description, category, year, image, user_id) 
                VALUES(:title, :description, :category, :year,:image, :user_id);";

        $query_prepare = $conn->prepare($sql);
        $query_prepare->bindParam('title', $title, \PDO::PARAM_STR);
        $query_prepare->bindParam('year', $year, \PDO::PARAM_INT);
        $query_prepare->bindParam('category', $category, \PDO::PARAM_STR);
        $query_prepare->bindParam('description', $description, \PDO::PARAM_STR);
        $query_prepare->bindParam('image', $image, \PDO::PARAM_STR);
        $query_prepare->bindParam('user_id', $user_id, \PDO::PARAM_INT);

        return $query_prepare->execute();
    }

    public function getFilm(string $id){

        $conn = db::Connection();

        $sql = "SELECT movie.id_movie, movie.name, movie.description, movie.category, movie.year, movie.image,
        count(review.score) as quantity,
        ROUND(AVG(review.score), 1) as average_score
        FROM movie
        LEFT JOIN review ON movie.id_movie = review.movie_id
        WHERE id_movie = :id_movie
        GROUP BY movie.id_movie, movie.name, movie.description, movie.category, movie.year, movie.image";
        $sql_prepare = $conn->prepare($sql);

        $sql_prepare->bindParam('id_movie', $id, \PDO::PARAM_INT);

        $sql_prepare->execute();

        $result = $sql_prepare->fetch();    

        return $result;
    }
}
