<?php 

namespace App\config;

class db{

    static function Connection(): \PDO|array {  

        try{
            $path = __DIR__ . '/../config/database.db';
            $pdo = new \PDO("sqlite:$path");
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(\PDOException $e){
            echo $e->getMessage();
            return ["error" => $e->getMessage()];
        }

       
    }


    static function StructureOfDB(): void{

        $pdo = db::Connection();

        $sql = "
        CREATE TABLE IF NOT EXISTS user(
            id INTEGER PRIMARY KEY,
            name TEXT NOT NULL DEFAULT '',
            email TEXT NOT NULL DEFAULT '',
            password TEXT NOT NULL,
            telephone TEXT DEFAULT ''
        );
        
        CREATE TABLE IF NOT EXISTS movie(
            id_movie INTEGER PRIMARY KEY,
            name TEXT NOT NULL DEFAULT '',
            description TEXT NOT NULL DEFAULT '',
            category TEXT NOT NULL,
            year INTEGER DEFAULT 0,
            image TEXT DEFAULT '',
            user_id INTEGER,
            FOREIGN KEY(user_id) REFERENCES user(id)
        );

        CREATE TABLE IF NOT EXISTS review(
            id_review INTEGER PRIMARY KEY,
            comment TEXT NOT NULL DEFAULT '',
            description TEXT NOT NULL DEFAULT '',
            score TEXT NOT NULL,
            user_id INTEGER,
            movie_id INTEGER,
            FOREIGN KEY(user_id) REFERENCES user(id)
            FOREIGN KEY(movie_id) REFERENCES movie(id)
        );

        

        ";

        $pdo->exec($sql);
        
        // INSERT INTO user(name,email,password,telephone) VALUES('Miguel','miguel@gmail.com','1234','51996084548');

        // INSERT INTO movie(name, description, category, year, image, user_id) VALUES ('Gru', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Action', 2022, 'assets/image/movies/OCorvo.png', 2 );
        
        //INSERT INTO review(comment, description, score, user_id, movie_id) VALUES('bla bla','bla','3',1,1)
        

        
    }

}

db::StructureOfDB();