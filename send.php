<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь

// Для формы в футере сайта
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if (!empty($name)) {
    $title = "New appeal Best Tour Plan";
    $body = "
    <h2>New appeal</h2>
    <b>Name:</b> $name<br>
    <b>Phone:</b> $phone<br><br>
    <b>Message:</b><br>$message
    ";
} else {
    $emailNewsletter = $_POST['emailNewsletter'];
    $title = "New Subscriber for You";
    $body = "
    <h2>New Subscriber!</h2>
    <strong>His Email: </strong> $emailNewsletter<br><br>
    <strong>Congratulations!!!</strong>
    ";
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'viskhan.dobry@gmail.com'; // Логин на почте
    $mail->Password   = 'viskhan.dobry95'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('viskhan.dobry@gmail.com', 'Висхан Элиханов'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('viskhan11@gmail.com');  
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
// echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
// Перенаправление после обработки формы
header('Location: thanks.php');