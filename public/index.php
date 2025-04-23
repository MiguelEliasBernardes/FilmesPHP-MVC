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
        header('Location: index.php?route=login');
        break;

    case 'add':
        if (!SessionManager::isLogged()) {
            header('Location: index.php?route=login');
            exit;
        }

        $controller = new MovieController();
        $controller->add();

        break;

    case 'register':
        $controller = new UserController();
        $controller->register();
        break;

    case 'usermovies':
        if (!SessionManager::isLogged()) {
            header('Location: index.php?route=login');
            exit;
        }

        require __DIR__ . '../../View/movies/myfilm.php';
        break;

    case 'explore':
        if (!SessionManager::isLogged()) {
            header('Location: index.php?route=login');
            exit;
        }

        require __DIR__ . '../../View/movies/index.php';
        break;

    case 'about':

        if (!SessionManager::isLogged()) {
            header('Location: index.php?route=login');
            exit;
        }


        $id = $_GET['movie_id'] ?? '';
        $review = new MovieController();

        if($id != ""){
            $review->GetMovie($id); 
        }else{
            header("Location: index.php?route=explore");
        }  
        break;

    case 'createReview';
        if (!SessionManager::isLogged()) {
            header('Location: index.php?route=login');
            exit;
        }

        $reviewController = new ReviewsController();
        $reviewController->createReview();

        break;

    default:
        echo "Página não encontrada.";
}