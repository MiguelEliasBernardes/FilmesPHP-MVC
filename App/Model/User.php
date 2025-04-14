<?php
namespace App\Model;
use App\Config\db;
class User{
    
    public function GetUserForName(string $email, string $password) : array | bool{
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';";

        $conn = db::Connection();
        $pre = $conn->prepare($sql);
        $pre->execute();

        $result = $pre->fetch();

        return $result;
    }

    public function RegisterUser(string $name, string $email, string $password) : bool{

        $sql = "INSERT INTO user(name,email,password,telephone) VALUES('$name', '$email', '$password', '');";

        $conn = db::Connection();
        $pre = $conn->prepare($sql);
        $pre->execute();

        $result = $pre->fetch();

        return $result;
    }

}