?<?php
/**
 * Created by PhpStorm.
 * User: �����
 * Date: 18.06.2016
 * Time: 18:46
 */
$allNews = database::GetAllNews();
?>

<div class="header_blog" id="header_block">
    <div class="body">
        <h3>Новости</h3>
        <?php foreach ($allNews as $new): ?>
        <div class="port">
            <h2><?php echo($new['title']); ?><br />
                <span><?php echo($new['subject']); ?>...</span></h2>
            <img src="<?php echo($new['image']); ?>" alt="port" width="278" height="146" />
            <p><?php echo($new['content']); ?>. <br />
                <a href="#"><?php echo($new['date']); ?> </a></p>
        </div>
        <?php endforeach; ?>
        <div class="clr"></div>
    </div>
</div>
<div class="clr"></div>
<div class="clr"></div>
<div class="clr"></div>
