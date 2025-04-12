<?php
use App\Helpers\SessionManager;
require "../App/Model/User.php";

class UserController{

    private ?string $name;
    private ?string $password;
    private ?string $email;
    private ?int $id;

    public function __construct(?string $name, ?string $password, ?string $email, ?int $id) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->id = $id;
    }

    public function authenticate(): array{
        $user = new User();
        $result = $user->GetUserForName($this->email, $this->password);

        if(count($result) != 1){
            return ["sucess" => false,
                "error" => "Nenhum usuário encontrado!"];
        } 

        SessionManager::storeUserSession($result);

        return ["sucess" => true];
    }


}