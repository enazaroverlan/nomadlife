<?php

/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 18.06.2016
 * Time: 18:25
 */
require_once(get_include_path().'/lib/Render.php');

class Routing
{

    public static function StartListeningRequest()
    {
        Render::RenderMenu(isset($_REQUEST['action']) ? $_REQUEST['action'] : 'main');
    }
}