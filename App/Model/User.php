<?php

class User{
    
    public function GetUserForName(string $email, string $password) : array{
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';";

        $conn = db::Connection();
        $pre = $conn->prepare($sql);
        $pre->execute();

        $result = $pre->fetch();
        return $result;
    }
}