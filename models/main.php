<?php
/**
 * Created by PhpStorm.
 * User: �����
 * Date: 18.06.2016
 * Time: 17:40
 */

$allItems = database::GetAllSliderItems();
$allEvents = database::GetAllEvents();
?>

<div class="header_blog" id="header_block">
    <div id="slider">
        <!-- start slideshow -->
        <div id="slideshow">
            <?php foreach($allItems as $item): ?>
            <div class="slider-item">
                <div class="slider_image" style="float: left"><img src="<?php echo($item['image']); ?>" alt="icon" width="612" height="398" border="0" /></div>
                <div class="slider_conteiner">
                    <p class="slider_title"><b><?php echo($item['title']); ?></b></p>
                    <p class="slider_content"><?php echo($item['content']) ?></p>
                    <p class="slider_button"><a href="<?php echo($item['link']); ?>" class="btn btn-primary">Перейти</a></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="clr"></div>
        <!-- end #slideshow -->
        <div class="controls-center">
            <div id="slider_controls">
                <h2><strong>Последние новости:</strong> <?php echo($allEvents[0]['title']); ?> : <?php echo(substr($allEvents[0]['description'], 0, 30).'...'); ?></h2>
                <ul id="slider_nav">
                    <?php foreach($allItems as $item): ?>
                    <li><a href="#"></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <div class="FBG">
        <div class="bloga"> <img src="/<?php echo URL_PREFIX; ?>resources/images/fbg_1.png" alt="fbg_img" width="75" height="75" />
            <h2>С нами вы экономите время и деньги</h2>
            <p>Прайс лист путёвок, аренда лошадей, аренда экипировки</p>
            <p><a href="#">&gt;&gt; читать далее</a></p>
        </div>
        <div class="bloga"> <img src="/<?php echo URL_PREFIX; ?>resources/images/fbg_2.png" alt="fbg_img" width="75" height="65" />
            <h2>Доверенность и Гарантии</h2>
            <p>Уже тысячи туристов побывали в Кыргызстане используя наши услуги </p>
            <p><a href="#">&gt;&gt; читать далее</a></p>
        </div>
        <div class="bloga last"> <img src="/<?php echo URL_PREFIX; ?>resources/images/fbg_3.jpg" alt="fbg_img" width="75" height="75" />
            <h2>Юридическая защита с нашей стороны</h2>
            <p>Наша фирма тесно связана с лучшей юридической компанией этой страны </p>
            <p><a href="#">&gt;&gt; читать далее</a></p>
        </div>
        <div class="clr"></div>
    </div>
    <div class="body">
        <div class="port">
            <h2>Добро пожаловать на наш сайт<br />
                <span>Открытие сайта...</span></h2>
            <img src="/<?php echo URL_PREFIX; ?>resources/images/img_1.jpg" alt="picture" width="278" height="146" />
            <p>Дорогие наши гости, сегодня стартовал наш сайт. Вы можете найти моного полезной информации а так же оставить писмо в разделе "Обратная связь". <br />
                <a href="#">&gt;&gt; читать далее </a></p>
        </div>
        <div class="port">
            <h2>Почему вам стоит выбрать именно нас?<br />
                <span>Ответы на многие вопросы...</span></h2>
            <img src="/<?php echo URL_PREFIX; ?>resources/images/img_2.jpg" alt="picture" width="278" height="146" />
            <p>Признавая, что сейчас туризм весьма развит в наше время, то туристы часто задаются вопросом безопасности. <br />
                мы даём вам гарантии, а так же предостовляем юридическую защиту... <br />
                <a href="#">&gt;&gt; читать далее </a></p>
        </div>
        <div class="port">
            <h2>Новости и события<br />
                <span>последние новости нашей фирмы...</span></h2>
            <?php foreach($allEvents as $event): ?>
            <p><a href="#"><?php echo($event['date']); ?> | 0 comments</a><br />
                <span><?php echo($event['title']); ?></span><br />
                <?php echo($event['description']); ?> </p>
            <?php endforeach; ?>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="clr"></div>
<div class="clr"></div>
<div class="clr"></div>
