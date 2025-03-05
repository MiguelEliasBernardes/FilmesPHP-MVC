<?php 

class db{

    static function Connection(): PDO|array {  

        try{
            $pdo = new PDO('sqlite:../config/database.db');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(PDOException $e){
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
            id INTEGER PRIMARY KEY,
            name TEXT NOT NULL DEFAULT '',
            description TEXT NOT NULL DEFAULT '',
            category TEXT NOT NULL,
            year INTEGER DEFAULT 0,
            image TEXT DEFAULT ''
        );

        CREATE TABLE IF NOT EXISTS review(
            id INTEGER PRIMARY KEY,
            comment TEXT NOT NULL DEFAULT '',
            description TEXT NOT NULL DEFAULT '',
            score REAL NOT NULL,
            user_id INTEGER,
            movie_id INTEGER,
            FOREIGN KEY(user_id) REFERENCES user(id)
            FOREIGN KEY(movie_id) REFERENCES movie(id)
        );
        
        ";

        $pdo->exec($sql);

    }

}

db::StructureOfDB();