<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:47
 */

require_once('../defines/defines.php');
require_once('../lib/Security.php');
require_once('adminLibs/adminRouting.php');

session_start();

adminRouting::StartListeningRequests();

if(Security::GetStatus() == false || !isset($_SESSION['isAuth']))
{
    include_once('views/login.php');
}
else
{
    include_once('views/admin.php');
}