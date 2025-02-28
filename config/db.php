<?php 

class db{

    static function Connection(): PDO|array {  

        try{
            $pdo = new PDO('sqlite:database.db');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(PDOException $e){
            echo $e->getMessage();
            return ["error" => $e->getMessage()];
        }
    }


    static function StructureOfDB(): void{

        $pdo = db::Connection();

        $sql = "CREATE TABLE IF NOT EXISTS user(
            id INTEGER PRIMARY KEY,
            name TEXT NOT NULL DEFAULT '',
            email TEXT NOT NULL DEFAULT '',
            password TEXT NOT NULL,
            telephone TEXT DEFAULT ''
        ) AND  
        
        
        
        ;";

        $pre = $pdo->prepare($sql);
        $pre->execute();

    }


}

db::StructureOfDB();