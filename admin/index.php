<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:47
 */

require_once('../lib/Security.php');
require_once('adminLibs/adminRouting.php');

session_start();

adminRouting::StartListeningRequests();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Nomad Life - Page Title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="/<?php echo URL_PREFIX; ?>style/adminStyle.css" rel="stylesheet" type="text/css" />
        <link href="/<?php echo URL_PREFIX; ?>style/bootstrap.css">
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/jquery.v1.4.2.js"></script>
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/jquery.cycle.all.min.js"></script>
        <!--  ACTIVATE CUFON TEXT REPLACEMENT IF ENABLED IN THEME OPTIONS  -->
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/cufon-yui.js"></script>
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/liberation_sans.js"></script>
    </head>
    <body>
    <?php

        if(!Security::GetStatus())
        {
            include_once('views/login.php');
        }
        else
        {
            include_once('views/admin.php');
        }

    ?>
    </body>
</html>
