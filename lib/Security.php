<?php

/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:47
 */
require_once('../database/database.php');
require_once('../defines/defines.php');
class Security
{
    private static $isAuth;


    public static function GetStatus()
    {
        return isset($_SESSION['isAuth']);
    }

    public static function Login($login, $password)
    {
        $log = database::SignIn($login, $password);

        if ($log) {
            self::$isAuth = true;
            $_SESSION['isAuth'] = 'true';
            if(database::GetUserData($login)['user_type'] == 'admin')
                $_SESSION['isAdmin'] = 'true';
        }
        else {
            self::$isAuth = false;
        }
    }

    public static function LogOut()
    {
        unset($_SESSION['isAuth']);
        unset($_SESSION['isAdmin']);
        self::$isAuth = false;
        header('Location: /'.URL_PREFIX.'admin');
    }
}