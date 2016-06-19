<?php
/**
 * Created by PhpStorm.
 * User: �����
 * Date: 18.06.2016
 * Time: 17:07
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Nomad Life - Page Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/<?php echo URL_PREFIX; ?>style/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/jquery.v1.4.2.js"></script>
    <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/jquery.cycle.all.min.js"></script>
    <!--  ACTIVATE CUFON TEXT REPLACEMENT IF ENABLED IN THEME OPTIONS  -->
    <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/cufon-yui.js"></script>
    <script type="text/javascript" src="/<?php echo URL_PREFIX; ?>js/liberation_sans.js"></script>
    <script type="text/javascript">
        // <![CDATA[
        Cufon.replace('h1, h2, h3, h4, h5, h6', { hover: true });

        $(function(){
            $('#slideshow').cycle({
                fx:     'fade',
                speed:  'slow',
                timeout: 5000,
                pager:  '#slider_nav',
                pagerAnchorBuilder: function(idx, slide) {
                    // return sel string for existing anchor
                    return '#slider_nav li:eq(' + (idx) + ') a';
                }
            });
        });

        $(function(){
            $('#contactform').submit(function(){
                var action = $(this).attr('action');
                $.post(action, {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        company: $('#company').val(),
                        subject: $('#subject').val(),
                        message: $('#message').val()
                    },
                    function(data){
                        $('#contactform #submit').attr('disabled','');
                        $('.response').remove();
                        $('#contactform').before('<p class="response">'+data+'</p>');
                        $('.response').slideDown();
                        if(data=='Message sent!') $('#contactform').slideUp();
                    }
                );
                return false;
            });
        });
        // ]]>
    </script>
</head>
<body>
<div class="main">
    <div class="header_resize">
        <div class="header">
            <div class="logo"><a href="index.html"><img src="/<?php echo URL_PREFIX; ?>resources/images/logo1.gif" width="234" height="118" border="0" alt="logo" /></a></div>
            <div class="menu">
                <ul>
                    <li><a href="/<?php echo URL_PREFIX; ?>" class="active"><span>Главная</span></a></li>
                    <li><a href="/<?php echo URL_PREFIX; ?>?action=kyrgyz"><span>Кыргызстан</span></a></li>
                    <li><a href="/<?php echo URL_PREFIX; ?>?action=portfolio"><span>Портфолио</span></a></li>
                    <li><a href="/<?php echo URL_PREFIX; ?>?action=about"><span> О нас </span></a></li>
                    <li><a href="/<?php echo URL_PREFIX; ?>?action=feedback"><span> Обратная связь</span></a></li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
