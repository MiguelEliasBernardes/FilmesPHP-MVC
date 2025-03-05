<?php

require "../App/Model/User.php";

class UserController{

    private string $name;
    private string $password;
    private string $email;

    public function __construct(string $name = '', string $password = '', string $email = '') {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }

    public function VerifyUser(){
        $user = new User();
        $result = $user->GetUserForName($this->email, $this->password);
        $this->name = $result['name'];

        //self::SetCookies();

        return $result;
    }

    private static function SetCookies($user) : void{

        $validate = strtotime("+1 month");

        setcookie('sisgen_user', $user, $validate,"/" ,"", false, true);
    }

    private static function ForgetCookie() :void{

        $validate = time() - 3600;

        setcookie('sisgen_user', "", $validate,"/" ,"", false, true);
    }


}