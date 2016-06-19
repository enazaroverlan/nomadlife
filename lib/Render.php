<?php

/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 18.06.2016
 * Time: 18:34
 */
class Render
{
    public static function RenderMenu($model)
    {
        return include_once(get_include_path().'/models/'.$model.'.php');
    }
}