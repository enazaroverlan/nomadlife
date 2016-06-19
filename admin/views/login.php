<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:47
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Nomad Life - Page Title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="/<?php echo URL_PREFIX; ?>style/style.css" rel="stylesheet" type="text/css" />
        <link href="/<?php echo URL_PREFIX; ?>style/bootstrap.css">
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/jquery.v1.4.2.js"></script>
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/jquery.cycle.all.min.js"></script>
        <!--  ACTIVATE CUFON TEXT REPLACEMENT IF ENABLED IN THEME OPTIONS  -->
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/cufon-yui.js"></script>
        <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/liberation_sans.js"></script>
    </head>
    <body>
        <div class="login_form">
            <form class="form-horizontal" role="form" action="/<?php URL_PREFIX; ?>admin/?action=login">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
                    <div class="col-sm-10">
                        <input type="login" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember_me"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
