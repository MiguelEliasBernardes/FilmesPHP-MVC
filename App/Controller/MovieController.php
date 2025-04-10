<?php

require '/xampp/htdocs/FilmesPHP-MVC/App/Model/Movie.php';
class MovieController{

    private string $name;
    private string $description;
    private string $category;
    private int $year;
    private string $image;

    public function CheckNumberOfFilms() {

        $movie = new Movie();
        $resultMovies = $movie->GetAllFilms();
        
        if(count($resultMovies) <= 0){
            return include __DIR__ . '../../../View/movies/film/notHaveFilm.php';
        }

        return include __DIR__ . '../../../View/movies/film/haveFilm.php';


    }



}