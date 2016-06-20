<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 20.06.2016
 * Time: 18:29
 */


require_once('../vendor/autoload.php');

$smtp = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')->setUsername('okay11007@gmail.com')->setPassword('fdhjlbnf,kznm97');
$mailer = new Swift_Mailer($smtp);
$msg = Swift_Message::newInstance('Nomadlife')->setTo('abovetheskygames@gmail.com')->setFrom(array('okay11007@gmail.com'));

$action = $_REQUEST['action'];

switch($action)
{
    case 'mailto':
            $name = $_REQUEST['name'];
            $mail = $_REQUEST['email'];
            $company = $_REQUEST['company'];
            $subject = $_REQUEST['subject'];
            $message = $_REQUEST['message'];

            $final_message = "Имя: $name \n".
                                "От: $mail \n".
                                !empty($company) ? "Компания: $company \n" : "\n".
                                "Тема: $subject".
                                "Сообщение: \n".
                                "$message";

            $msg->setBody($final_message);
            $result = $mailer->send($msg);

        header('Content-type: application/json');

        if (!$result) {
            $callback = array(
                "result" => "error",
                "message" => "Не получилось отправить сообщение. Неизвестная ошибка!"
            );
        } else {
            $callback = array(
                "result" => "",
                "message" => "Успешно отправлено"
            );
        }
        echo(json_encode($callback));
        break;
}