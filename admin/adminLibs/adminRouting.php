<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 13:30
 */


class adminRouting
{
    public static function StartListeningRequests()
    {
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'nothing';

        switch($action)
        {
            case 'nothing':
                break;
            case 'login': Security::Login($_REQUEST['login'], $_REQUEST['password']);
                header('Location: /'.URL_PREFIX.'admin');
                break;
            case 'logout': Security::LogOut();
                break;
            case 'addNewItemToSlider': database::AddItemToSlider($_REQUEST['image'], $_REQUEST['title'], $_REQUEST['content'], $_REQUEST['link']);
                header('Location: /'.URL_PREFIX.'admin/?action=slider');
                break;
            case 'removeItemFromSlider': database::RemoveItemFromSlider($_REQUEST['id']);
                header('Location: /'.URL_PREFIX.'admin/?action=slider');
                break;
            case 'editItemInSlider': database::EditItemInSlider($_REQUEST['id'], $_REQUEST['image'], $_REQUEST['title'], $_REQUEST['content'], $_REQUEST['link']);
                header('Location: /'.URL_PREFIX.'admin/?action=slider');
                break;
            case 'removeImageFromGallery': database::RemoveImageInGallery($_REQUEST['id']);
                header('Location: /'.URL_PREFIX.'admin/?action=gallery');
                break;
            case 'editImageInGallery': database::EditImageInGallery($_REQUEST['id'], $_REQUEST['image'], $_REQUEST['description']);
                header('Location: /'.URL_PREFIX.'admin/?action=gallery');
                break;
            case 'addNewImageIntoGallery': database::AddImageIntoGallery($_REQUEST['image'], $_REQUEST['description']);
                header('Location: /'.URL_PREFIX.'admin/?action=gallery');
                break;
            case 'addNewEventToEvents': database::AddEventIntoEvents($_REQUEST['title'], $_REQUEST['description'], $_REQUEST['date']);
                header('Location: /'.URL_PREFIX.'admin/?action=events');
                break;
            case 'editEventInEvents': database::EditEventInEvents($_REQUEST['id'], $_REQUEST['title'], $_REQUEST['description'], $_REQUEST['date']);
                header('Location: /'.URL_PREFIX.'admin/?action=events');
                break;
            case 'removeEventInEvents': database::RemoveEventFromEvenrs($_REQUEST['id']);
                header('Location: /'.URL_PREFIX.'admin/?action=events');
                break;
            case 'addNewToNews': database::AddNewIntoNews($_REQUEST['image'], $_REQUEST['title'], $_REQUEST['subject'], $_REQUEST['content']);
                header('Location: /'.URL_PREFIX.'admin/?action=news');
                break;
            case 'editNewInNews': database::EditNewInNews($_REQUEST['id'], $_REQUEST['image'], $_REQUEST['title'], $_REQUEST['subject'], $_REQUEST['content']);
                header('Location: /'.URL_PREFIX.'admin/?action=news');
                break;
            case 'removeNewFromNews': database::RemoveNewFromNews($_REQUEST['id']);
                header('Location: /'.URL_PREFIX.'admin/?action=news');
                break;
            case 'addNewUser':
                $d = database::AddNewUser($_REQUEST['login'], $_REQUEST['password'], $_REQUEST['type']);
                if($d == "Successful") {
                    header('Location: /' . URL_PREFIX . 'admin/?action=users');
                }
                else {
                    header('Location: /'.URL_PREFIX.'admin/?action=users&error='.$d);
                }
                break;
            case 'editUser': database::EditUser($_REQUEST['id'], $_REQUEST['login'], $_REQUEST['password'], $_REQUEST['type']);
                header('Location: /'.URL_PREFIX.'admin/?action=users');
                break;
            case 'removeUser': database::RemoveUser($_REQUEST['id']);
                header('Location: /'.URL_PREFIX.'admin/?action=users');
                break;

        }
    }

    public static function StartListeningPageRequests()
    {
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'main';

        switch($action)
        {
            case 'main': return include_once(ADMIN_PATH.'/models/main.php'); break;
            case 'slider': return include_once(ADMIN_PATH.'/models/slider.php'); break;
            case 'users': return include_once(ADMIN_PATH.'/models/users.php'); break;
            case 'gallery': return include_once(ADMIN_PATH.'/models/gallery.php'); break;
            case 'events': return include_once(ADMIN_PATH.'/models/events.php'); break;
            case 'news': return include_once(ADMIN_PATH.'/models/news.php'); break;
        }
    }
}