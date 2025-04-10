<?php

session_start();

require_once '../config/db.php';
require_once '../App/Controller/MovieController.php';
require_once '../App/Controller/UserController.php';
require_once '../App/Controller/ReviewsController.php';

function UserVerify(): void{


    $_SESSION['email'] = "";
    $_SESSION['password'] = "";

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    
    if($email == "" && $password == ""){
        header('Location: ../View/auth/login.php');
    }else{
        $user = new UserController(email: $email, password:$password);
        $user->VerifyUser();
        header('Location: ../View/movies/index.php');
    }
}

UserVerify();
