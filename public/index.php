<?php

session_start();

require "db.php";
require "App/Controller/UserController.php";

function UserVerify(){

    $name = $_SESSION['name'];
    $password = $_SESSION['password'];

    if($name == "" && $password == ""){
        header('Location: View/login.php');
    }
}
