<?php

require "App/Model/User.php";

class UserController{

    private string $name;
    private string $password;
    private string $email;

    public function __construct(string $name = Null, string $password = Null, string $email = Null) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }

    public function VerifyUser(string $name, string $password){
        $user = new User();
        $result = $user->GetUserForName($name,$password);

        return $result;
    }


}