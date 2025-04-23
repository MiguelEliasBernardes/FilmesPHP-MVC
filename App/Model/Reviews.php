<?php

namespace App\Model;
use App\Config\db;

class Reviews{

    public function GetAllReviewsFromFilme(?int $id) : array{

        $conn = db::Connection();

        $sql = "SELECT user.name AS user_name, review.comment, review.score, (
            SELECT COUNT(*) FROM review WHERE review.user_id = user.id ) AS user_reviews 
                FROM review 
                INNER JOIN (
                SELECT MAX(id_review) AS latest_review_id
                FROM review
                WHERE movie_id = :id
                GROUP BY user_id
                ) latest ON review.id_review = latest.latest_review_id
                INNER JOIN user ON review.user_id = user.id
                WHERE review.movie_id = :id;
        ";

        $sql_prepare = $conn->prepare($sql);

        $sql_prepare->bindParam('id',$id, \PDO::PARAM_INT);

        $sql_prepare->execute();

        $result = $sql_prepare->fetchAll();

        return $result;
    }

    public function createUserReview(?int $id_movie, ?int $id_user, ?string $comment, ?string $score): bool{

        $conn = db::Connection();

        $sql = "INSERT INTO review(comment, score,user_id, movie_id) VALUES (:comment, :score, :user_id, :movie_id)";

        $sql_prepare = $conn->prepare($sql);

        $sql_prepare->bindParam('comment', $comment, \PDO::PARAM_STR);
        $sql_prepare->bindParam('score', $score, \PDO::PARAM_STR);
        $sql_prepare->bindParam('user_id', $id_user, \PDO::PARAM_INT);
        $sql_prepare->bindParam('movie_id', $id_movie, \PDO::PARAM_INT);

        return $sql_prepare->execute();

    }


}