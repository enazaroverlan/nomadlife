?3<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 9:24
 */
?>
<div class="header_blog" id="header_block">
    <div class="body">
        <h3>Обратная связь</h3>
        <div class="left">
            <h2>Свяжитесь с нами<br />
                <span>email...</span></h2>
            <p>Мы ответим вам как только прочитаем. Обычно мы отвечаем в течении 24 часов.</p>
            <h2>Оставьте нам письмо</h2>
            <form method="post" id="contactform" action="/<?php echo(URL_PREFIX); ?>requests/GetAjaxRequests.php?action=mailto">
                <ol>
                    <li>
                        <label for="name">Имя: <span>(обязательно)</span></label>
                        <input id="name" name="name" class="text" />
                    </li>
                    <li>
                        <label for="email">ваш E-Mail: <span>(обязательно)</span></label>
                        <input id="email" name="email" class="text" />
                    </li>
                    <li>
                        <label for="company">Компания:</label>
                        <input id="company" name="company" class="text" />
                    </li>
                    <li>
                        <label for="subject">Тема: <span>(обязательно)</span></label>
                        <input id="subject" name="subject" class="text" />
                    </li>
                    <li>
                        <label for="message">Сообщение: <span>(обязательно)</span></label>
                        <textarea id="message" name="message" rows="6" cols="50"></textarea>
                    </li>
                    <li class="buttons">
                        <a href="#" class="btn btn-primary" id="send_button"><span style="color: white;">Отправить</span></a>
                        <div class="clr"></div>
                    </li>
                </ol>
            </form>
            <div id="custom_message" style="width: 200px; height: 50px; border: 0; background: white; display: none;">
                <span id="loading" style="display: none;"><img src="/<?php echo(URL_PREFIX); ?>resources/images/loading.gif" /></span>
                <span id="message" style="display: none;"></span>
            </div>
        </div>
        <div class="right">
            <h2>Адресс<br />
                <span>наш офис в Бишкеке...</span></h2>
            <p><a href="#">Наш офис</a><br />
                1234 Б.Ц. Берекет, TS 56789<br />
                Бишкек, Кыргызстан</p>
            <p><a href="#">Наши контакты</a><br />
                Email: testmail@nomadlife.com<br />
                Телефон: +996 771 123 321</p>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="clr"></div>
<div class="clr"></div>
<div class="clr"></div>