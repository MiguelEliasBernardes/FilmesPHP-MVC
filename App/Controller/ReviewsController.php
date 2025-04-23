<?php

namespace App\Controller;
use App\Model\Reviews;

class ReviewsController{
    
    public function getMoviesReviews(int $movie_id) : mixed {

        $reviewModel = new Reviews();

        $reviews = $reviewModel->GetAllReviewsFromFilme($movie_id);

        if(count($reviews) > 0){
            return include __DIR__ . "../../../View/reviews/review/reviews.php";
        }else{
            return include __DIR__ . "../../../View/reviews/review/notFoundReviews.php";
        }

    }

    public function createReview(): mixed{
        
        $id_movie = $_POST['movie_id'];
        $id_user = $_SESSION['user']['id'];
        $comment = $_POST['comment'];
        $score = $_POST['score'];

        $reviewModel = new Reviews();

        $reviews = $reviewModel->createUserReview($id_movie, $id_user, $comment, $score);

        if($reviews){
            header("Location: index.php?route=about&movie_id=$id_movie");
            exit;
        }

        header("Location: index.php?route=explore");
        exit;

    }

}