<?php
namespace App\Helpers;

class SessionManager {
    public static function start() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        self::start();
        return $_SESSION[$key] ?? null;
    }

    public static function isLogged() {
        self::start();
        return isset($_SESSION['user']);
    }

    public static function destroy() {
        self::start();
        session_unset();
        session_destroy();
    }
}