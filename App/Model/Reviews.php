<?php

namespace App\Model;
use App\Config\db;

class Reviews{

    public function GetAllReviewsFromFilme(?int $id){

        $conn = db::Connection();

        $sql = "SELECT * FROM review 
                INNER JOIN movie ON review.movie_id = movie.id_movie
                INNER JOIN user ON review.user_id = user.id
                WHERE review.movie_id = :id;
        ";

        $sql_prepare = $conn->prepare($sql);

        $sql_prepare->bindParam('id',$id, \PDO::PARAM_INT);

        $sql_prepare->execute();

        return $sql_prepare;
    }

}