<?php

namespace App\Helpers;

class SessionManager {
    public static function storeUserSession(array $user): void {
        $_SESSION["name"] = $user['name'] ?? null;
        $_SESSION["email"] = $user['email'] ?? null;
        $_SESSION["user_id"] = $user['id'] ?? null;
    }

    public static function destroyUserSession(): void {
        session_unset();
        session_destroy();
    }

    public static function isAuthenticated(): bool {
        return isset($_SESSION['user_id']);
    }
}