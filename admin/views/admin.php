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
    <div class="<?php if(!isset($_REQUEST['action'])){ echo('bar_item_active'); } else { echo('bar_item'); } ?>">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/">Home page</a></span>
    </div>
    <div class="<?php if($_REQUEST['action'] == 'news') { echo('bar_item_active'); } else { echo('bar_item'); } ?>">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=news">News</a></span>
    </div>
    <div class="<?php if($_REQUEST['action'] == 'gallery') { echo('bar_item_active'); } else { echo('bar_item'); } ?>">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=gallery">Gallery</a></span>
    </div>
    <div class="<?php if($_REQUEST['action'] == 'events') { echo('bar_item_active'); } else { echo('bar_item'); } ?>">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=events">Events</a></span>
    </div>
    <div class="<?php if($_REQUEST['action'] == 'slider') { echo('bar_item_active'); } else { echo('bar_item'); } ?>">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=slider">Slider</a></span>
    </div>
    <div class="<?php if($_REQUEST['action'] == 'users') { echo('bar_item_active'); } else { echo('bar_item'); } ?>">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=users">Users</a></span>
    </div>
    <div class="bar_item" style="margin-top: 200px;">
        <span style="color: white;"><a href="/<?php echo URL_PREFIX; ?>admin/?action=logout">LogOut</a></span>
    </div>
</div>

<div class="content_bar">
    <?php adminRouting::StartListeningPageRequests(); ?>
</div>

