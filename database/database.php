<?php

/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:29
 */
require_once('../defines/defines.php');
class database
{
    private static $con;

    public static function Connect()
    {
        if (self::$con != null) {
            return self::$con;
        } else {
            self::$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            return self::$con;
        }
    }

    public static function GetAllSliderItems()
    {
        $query = "SELECT * FROM slider_items WHERE 1";
        $result = mysqli_query(self::Connect, $query);

        if (!$result)
            return die('Error: ' . mysqli_error(self::Connect()));

        $n = mysqli_num_rows($result);
        $items = array();

        for ($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($result);
            $items[$i] = $row;
        }

        return $items;
    }

    public static function AddItemToSlider($image, $title, $content, $link)
    {
        $query = "INSERT INTO slider_items(id, image, title, content, link) VALUES('', '$image', '$title', '$content', '$link')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemoveItemFromSlider($id)
    {
        $query = "DELETE FROM slider_items WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function Login($login, $password)
    {
        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query(self::Connect(), $query);

        if(!$result)
            return die('Error: '.mysqli_error(self::Connect()));

        $password = md5($password);
        if(mysqli_fetch_assoc($result)['password'] == $password)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function GetUserData($login)
    {
        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function AddNewUser($login, $password, $type)
    {
        $password = md5($password);
        $query = "INSERT INTO users(id, login, password, user_type) VALUES('','$login', '$password', '$type')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }
}