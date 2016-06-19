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
            case 'nothing': break;
            case 'login': Security::Login($_REQUEST['login'], $_REQUEST['password']); break;
            case 'addNewItemToSlider': database::AddItemToSlider($_REQUEST['image'], $_REQUEST['title'], $_REQUEST['content'], $_REQUEST['link']); break;
            case 'removeItemFromSlider': database::RemoveItemFromSlider($_REQUEST['id']); break;
        }
    }

}