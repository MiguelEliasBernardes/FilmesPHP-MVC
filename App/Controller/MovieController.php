<?php

require '/xampp/htdocs/FilmesPHP-MVC/App/Model/Movie.php';
class MovieController{

    private string $name;
    private string $description;
    private string $category;
    private int $year;
    private string $image;

    public function CheckNumberOfFilms(string $search) : mixed{

        $movie = new Movie();
        $movies = $search == '' ? $movie->GetMovies() : $movie->GetMovies($search);

        foreach ($movies as &$movie) {
            if(is_null($movie['score'])){
                $movie['score'] = 0;
            }
        }
        
        if(is_null($movies)){
            return include __DIR__ . '../../../View/movies/movie/notFoundMovies.php';
        }

        return include __DIR__ . '../../../View/movies/movie/movies.php';
    }



}