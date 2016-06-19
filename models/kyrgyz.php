<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 9:23
 */

$images = database::GetAllImages();
?>
<div class="header_blog" id="header_block">
    <div class="body">
        <h3>Кыргызстан</h3>
        <?php foreach($images as $image): ?>
        <div class="port">
            <h2><span><?php echo($image['description']); ?><br /></span></h2>
            <img alt="port" src="<?php echo($image['image']); ?>" width="250" height="150" />
        </div>
        <?php endforeach; ?>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
<div class="clr"></div>
<div class="clr"></div>
