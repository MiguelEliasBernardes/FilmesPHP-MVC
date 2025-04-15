<?php
namespace App\Model;
use App\Config\db;
class User{
    
    public function GetUserForName(string $email) : array | bool{
        $sql = "SELECT * FROM user WHERE email = :email ;";

        $conn = db::Connection();
        $pre = $conn->prepare($sql);
        $pre->bindParam(':email', $email, \PDO::PARAM_STR);
        $pre->execute();

        $result = $pre->fetch(\PDO::FETCH_ASSOC);
        
        return $result;
    }

    public function RegisterUser(string $name, string $email, string $password) : bool{

        $sql = "INSERT INTO user(name,email,password,telephone) VALUES(:name, :email, :password, '');";

        $conn = db::Connection();
        $pre = $conn->prepare($sql);
        $pre->bindParam(':name', $name, \PDO::PARAM_STR);
        $pre->bindParam(':email', $email, \PDO::PARAM_STR);
        $pre->bindParam(':password', $password, \PDO::PARAM_STR);
        
        return $pre->execute();

    }

}