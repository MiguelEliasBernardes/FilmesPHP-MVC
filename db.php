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



}
