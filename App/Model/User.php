<?php

class User{
    
    public function GetUserForName(string $name, string $password){
        $sql = "SELECT * FROM user WHERE name = $name and password = $password";

        $conn = db::Connection();
        $pre = $conn->prepare($sql);
        $pre->execute();

        $result = $pre->fetchAll();
        var_dump($result);
    }
}