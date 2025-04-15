<?php

namespace App\Controller;
use App\Model\Movie;


class MovieController{

    public function GetAllMovies(string $search, string $case) : mixed{

        $movie = new Movie();

        if($case == "user"){
            $movies = $search == '' ? $movie->GetUserMovies() : $movie->GetUserMovies($search);
        }else{
            $movies = $search == '' ? $movie->GetMovies() : $movie->GetMovies($search);
        }
        
        foreach ($movies as &$movie) {
                $movie['score'] ??= 0;
        }

        $viewPath = count($movies) > 0
            ?  "../../../View/movies/movie/movies.php"
            : "../../../View/movies/movie/notFoundMovies.php";

        return include __DIR__ . "$viewPath";
    }

    public function GetFilm(int $id) : array | bool{

        $reviewModel = new Movie();
        $movie = $reviewModel->getFilm($id);

        if(count($movie) > 0){
            return $movie;
        }

        return false;

    }

    public function add(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $title = $_POST['title'] ?? '';
            $year = $_POST['year'] ?? '';
            $category = $_POST['category'] ?? '';
            $description = $_POST['description'] ?? '';
            $image = 'assets/image/movies/' . $_FILES['image']['name'] ?? '';
            $user_id = $_SESSION['user']['id'] ?? '';

            $movieModel = new Movie();
            $movie = $movieModel->add($title, $year, $category, $description, $image, $user_id);

            if($movie){
                require __DIR__ . '../../../View/movies/index.php';
                exit;
            }else{
                require __DIR__ . '../../../View/movies/add.php?error=failedmovie';
                exit;
            }
        }else{
            require __DIR__ . '../../../View/movies/add.php';
            exit;
        }

    }

}