<?php
namespace App\Controller;
use App\Model\User;
use App\Helpers\SessionManager;

class UserController{

    private ?string $name;
    private ?string $password;
    private ?string $email;
    private ?int $id;

    public function authenticate() : void{

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $userModel = new User();
            $user = $userModel->GetUserForName($email, $password);
            
            if ($user && $password == $user['password']) {
                SessionManager::set('user',[
                    "id" => $user['id'],
                    "name" => $user['name']
                ]);

                require __DIR__ . '../../../View/movies/index.php';
                exit;
            }else{
                require __DIR__ . '../../../View/auth/login.php?error=loginwrong';
            }
            
        }else{
            require __DIR__ . '../../../View/auth/login.php';
        }
    }


    public function register() : void{

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $userModel = new User();
            $user = $userModel->RegisterUser($name, $email, $password);
            
            if ($user && $password == $user['password']) {
                SessionManager::set('user',[
                    "id" => $user['id'],
                    "name" => $user['name']
                ]);

                require __DIR__ . '../../../View/movies/index.php';
                exit;
            }else{
                require __DIR__ . '../../../View/auth/register.php';
            }
            
        }else{
            require __DIR__ . '../../../View/auth/register.php';
        }
    }

}