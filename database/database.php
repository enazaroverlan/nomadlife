<?php

/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:29
 */
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

    //========================== Slider =====================================
    public static function GetAllSliderItems()
    {
        $query = "SELECT * FROM slider_items WHERE 1";
        $result = mysqli_query(self::Connect(), $query);

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

    public static function GetSliderItemByID($id)
    {
        $query = "SELECT * FROM slider_items WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function AddItemToSlider($image, $title, $content, $link)
    {
        $query = "INSERT INTO slider_items(id, image, title, content, link) VALUES('', '/".URL_PREFIX."resources/images/$image', '$title', '$content', '$link')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemoveItemFromSlider($id)
    {
        $query = "DELETE FROM slider_items WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function EditItemInSlider($id, $image, $title, $content, $link)
    {
        $query = "UPDATE slider_items SET image='/".URL_PREFIX."resources/images/$image', title='$title', content='$content', link='$link' WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }
    //========================== End Slider =================================

    //========================== User =======================================
    public static function SignIn($login, $password)
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

    public static function GetUserByID($id)
    {
        $query = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function GetAllUsers()
    {
        $query = "SELECT * FROM users WHERE 1";
        $result = mysqli_query(self::Connect(), $query);

        $n = mysqli_num_rows($result);
        $users = array();

        for($i=0; $i<$n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $users[$i] = $row;
        }

        return $users;
    }

    public static function EditUser($id, $login, $password, $type)
    {
        $password = md5($password);
        $query = "UPDATE users SET login='$login', password='$password', type='$type' WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemoveUser($id)
    {
        $query = "DELETE FROM users WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function AddNewUser($login, $password, $type)
    {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query(self::Connect(), $query);

        if(mysqli_num_rows($result) < 1)
        {
            $query = "INSERT INTO users(id, login, password, user_type) VALUES('','$login', '$password', '$type')";
            $result = mysqli_query(self::Connect(), $query);

            return "Successful";
        }

        return "This user is already exists";
    }
    //========================== End User ====================================

    //========================== Gallery =====================================
    public static function GetAllImages()
    {
        $query = "SELECT * FROM gallery WHERE 1";
        $result = mysqli_query(self::Connect(), $query);

        $n = mysqli_num_rows($result);
        $imagesInfo = array();

        for($i=0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $imagesInfo[$i] = $row;
        }

        return $imagesInfo;
    }

    public static function GetImageByID($id)
    {
        $query = "SELECT * FROM gallery WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function AddImageIntoGallery($image, $description)
    {
        $query = "INSERT INTO gallery(id, image, description) VALUES('', '/".URL_PREFIX."resources/images/$image', '$description')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function EditImageInGallery($id, $image, $description)
    {
        $query = "UPDATE gallery SET image='/".URL_PREFIX."resources/images/$image', description='$description' WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemoveImageInGallery($id)
    {
        $query = "DELETE FROM gallery WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }
    //========================== End Gallery =================================

    //========================== News ========================================
    public static function GetAllNews()
    {
        $query = "SELECT * FROM news WHERE 1";
        $result = mysqli_query(self::Connect(), $query);

        $n = mysqli_num_rows($result);
        $news = array();

        for($i=0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $news[$i] = $row;
        }

        return $news;
    }

    public static function GetNewsByID($id)
    {
        $query = "SELECT * FROM news WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function AddNewIntoNews($image, $title, $subject, $content)
    {
        $date = 'Опубликовано: '.date('Y-m-d');
        $query = "INSERT INTO news(id, image, title, subject, content, date) VALUES('', '/".URL_PREFIX."resources/images/$image', '$title', '$subject', '$content', '$date')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function EditNewInNews($id, $image, $title, $subject, $content)
    {
        $date = 'Отредактировано: '.date('Y-m-d');
        $query = "UPDATE news SET image='/".URL_PREFIX."resources/images/$image', title='$title', subject='$subject', content='$content', date='$date' WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemoveNewFromNews($id)
    {
        $query = "DELETE FROM news WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }
    //========================== End News ====================================

    //========================== Events ======================================
    public static function GetAllEvents()
    {
        $query = "SELECT * FROM events WHERE 1";
        $result = mysqli_query(self::Connect(), $query);

        $n = mysqli_num_rows($result);
        $events = array();

        for($i=0; $i<$n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $events[$i] = $row;
        }

        return $events;
    }

    public static function GetEventByID($id)
    {
        $query = "SELECT * FROM events WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return mysqli_fetch_assoc($result);
    }

    public static function AddEventIntoEvents($title, $description, $date)
    {
        $query = "INSERT INTO events(id, title, description, date, event_date) VALUES('', '$title', '$description', 'Опубликовано".date('Y-m-d')."', '$date')";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function EditEventInEvents($id, $title, $description, $date)
    {
        $query = "UPDATE events SET title='$title', description='$description', date='Отредактировано: ".date('Y-m-d')."', event_date='$date' WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }

    public static function RemoveEventFromEvenrs($id)
    {
        $query = "DELETE FROM events WHERE id='$id'";
        $result = mysqli_query(self::Connect(), $query);

        return $result;
    }
    //========================== End Events ==================================
}