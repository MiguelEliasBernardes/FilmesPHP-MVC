<?php

session_start();

require "../config/db.php";
require "../App/Controller/UserController.php";

function UserVerify(){


    $_COOKIE['email'] = "miguel@gmail.com";
    $_COOKIE['password'] = "miguel83";

    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    
    if($email == "" && $password == ""){
        header('Location: ../View/auth/login.php');
    }else{
        $user = new UserController(email: $email, password:$password);
        $user->VerifyUser();
    }
}

UserVerify();
