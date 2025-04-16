<?php

namespace App\Controller;
use App\Model\Reviews;

class ReviewsController{
    
    public function getMoviesReviews(int $movie_id) : void {

        $reviewModel = new Reviews();

        $reviewModel->GetAllReviewsFromFilme($movie_id);

    }

}