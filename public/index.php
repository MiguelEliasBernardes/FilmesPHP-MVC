<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . '../../App/Controller/MovieController.php';
require_once __DIR__ . '../../App/Controller/UserController.php';
require_once __DIR__ . '../../App/Controller/ReviewsController.php';
require_once __DIR__ . '../../App/Helpers/SessionManager.php';
require_once __DIR__ . '../../App/Model/User.php';
require_once __DIR__ . '../../App/Model/Movie.php';
require_once __DIR__ . '../../App/Model/Reviews.php';
require_once __DIR__ . '../../config/db.php';

use App\Controller\UserController;
use App\Controller\MovieController;
use App\Controller\ReviewsController;
use App\Helpers\SessionManager;

SessionManager::start();

$route = $_GET['route'] ?? 'login';

switch ($route) {
    case 'login':
        $controller = new UserController();
        $controller->authenticate();
        break;

    case 'logout':
        SessionManager::destroy();
        header('Location: /?route=login');
        break;

    case 'register':
        $controller = new UserController();
        $controller->register();
        break;

    case 'usermovies':
        if (!SessionManager::isLogged()) {
            header('Location: /?route=login');
            exit;
        }

        require __DIR__ . '../../View/movies/myfilm.php';


        break;

    case 'movies':
        $controller = new MovieController();
        //$controller->index(); // Exemplo: listar filmes
        break;

    case 'reviews':
        $controller = new ReviewsController();
        //$controller->index(); // Exemplo: listar reviews
        break;

    default:
        echo "Página não encontrada.";
}


// function UserVerify(): void{


//     $_SESSION['email'] = "";
//     $_SESSION['password'] = "";

//     $email = $_SESSION['email'];
//     $password = $_SESSION['password'];
    
//     if($email == "" && $password == ""){
//         header('Location: ../View/auth/login.php');
//     }else{
//         $user = new UserController(email: $email, password:$password);
//         $user->VerifyUser();
//         header('Location: ../View/movies/index.php');
//     }
// }

// UserVerify();
