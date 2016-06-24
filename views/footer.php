<?php
/**
 * Created by PhpStorm.
 * User: �����
 * Date: 18.06.2016
 * Time: 17:22
 */
?>
<div class="footer">
    <div class="footer_resize">
        <p class="leftt">&copy; Copyright NomadLife . All Rights Reserved<br />
        <p class="right"><strong> Horse traveling</strong></p>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
</div>
</body>
</html>
<script type="text/javascript">

    $(".header_blog").animate({
        opacity: 1
    }, 200);

    var content = $('#contactform');
    var sendBtn = $('#send_button');

    sendBtn.on('click', function(e) {
        e.preventDefault();
        $('#custom_message').fadeIn('slow');
        $('#loading').fadeIn('fast');
        $.ajax({
            url: $(content).attr('action'),
            data: $(content).serialize(),
            success: function(response) {
                  console.log(response);
                var msg = $('#responseMessage');
                $('#loading').fadeOut('slow');
                $(msg).fadeIn('slow');
                if(response.result == 'error') { msg.css('color', 'white').css('background', 'red'); msg.text = '' + response.message; } else { msg.css('color', 'white').css('background', 'green'); msg.text = '' + response.message; }
            },
            error: function(response) { console.log(response) },
            dataType: 'JSON'
    });
    });


</script>