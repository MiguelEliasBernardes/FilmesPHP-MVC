<?php

require '/xampp/htdocs/FilmesPHP-MVC/App/Model/Movie.php';
class MovieController{

    private string $name;
    private string $description;
    private string $category;
    private int $year;
    private string $image;

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

}