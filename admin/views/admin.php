<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 12:47
 */
require_once('../defines/defines.php');

$currentPage = 'slider';


?>


<div class="left_bar">
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/">Home page</a></span>
    </div>
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=news">News</a></span>
    </div>
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=gallery">Gallery</a></span>
    </div>
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=events">Events</a></span>
    </div>
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=slider">Slider</a></span>
    </div>
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=users">Users</a></span>
    </div>
    <div class="bar_item">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=logout">LogOut</a></span>
    </div>
</div>

<div class="content_bar">
    <?php adminRouting::StartListeningPageRequests(); ?>
</div>

