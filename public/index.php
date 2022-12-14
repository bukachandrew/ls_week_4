<?php
include_once "../config.php";
include_once "../vendor/autoload.php";

use App\ImageWatermark;
use App\SendMail;

//5.1
$mail = new SendMail();
/*$send = $mail->send(['bukach.andrew93@gmail.com'], 'Заголовок сообщения', 'Тестовое сообщение');
if ($send) {
    echo "Сообщение отправлено";
} else {
    echo "Сообщение не отправлено";
}*/

//5.3
$image = new ImageWatermark();
$image->image(PROJECT_ROOT_DIR . "/public/images/watermark.png", PROJECT_ROOT_DIR . "/public/images/test-new.jpeg");
