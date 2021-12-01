<?php

namespace App;

use App\Models\Users;

class Auth
{

    public static function login($email, $password)
    {
        $users = Users::getAll();

        foreach ($users as $u) {
            if ($email== $u->getEmail()) {
                if ($password == $u->getPassword()) {
                    $_SESSION["name"] = $email;
                    return true;
                } else {
                    return false;
                }
            }
        }

        return false;
    }

    public static function isLogged(){
        return isset($_SESSION['name']);
    }

    public static function getName(){
        return (Auth::isLogged() ? $_SESSION['name'] : "");
    }

    public static function registration()
    {
        
    }
    
    public static function logout()
    {
        unset($_SESSION['name']);
        session_destroy();
    }
}