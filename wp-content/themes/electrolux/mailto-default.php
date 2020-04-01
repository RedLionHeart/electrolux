<?php
session_start();
// Файлы phpmailer
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

//Удаляем данные utm-меток
unset($_SESSION['utm']);
session_destroy();

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$theme_name = $_POST['themeName'];
$cash_value = $_POST['cash'];
$utm_source = $_POST['source'];
$utm_medium = $_POST['medium'];
$utm_campaign = $_POST['campaign'];
$utm_content = $_POST['content'];
$utm_term = $_POST['term'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = false;
    $mail->SMTPAutoTLS = false;
    $mail->Port = 25;
    $mail->SMTPDebug = 2;
    // Настройки вашей почты
    $mail->Host       = 'localhost'; // SMTP сервера GMAIL
    $mail->Username   = 'testgeneralclimate@gmail.com'; // Логин на почте
    $mail->Password   = 'QW123456e'; // Пароль на почте
    $mail->SMTPSecure = 'tsl';
    $mail->Port       = 587;
    $mail->setFrom('testgeneralclimate@gmail.com', 'NAME'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('npklimat24@yandex.by'); // адрес куда приходят письма
    //$mail->addAddress('samura95@gmail.com'); // адрес куда приходят письма

    // -----------------------
    // Само письмо
    // -----------------------
    $mail->IsHTML(true);

    $mail->Subject = 'Заявка с сайта электролюкс.бел' . ' ' . $theme_name;
    if(isset($name) && $name !== ''){
        $message .= "<b>Имя </b> $name" . "<br>";
    }
    if(isset($phone) && $phone !== ''){
        $message .= "<b>Телефон </b> $phone" . "<br>";
        $message .= "<br>";
    }
    $message .= "<b>Источник </b> $utm_source" . "<br>";
    $message .= "<b>Тип трафика </b> $utm_medium" . "<br>";
    $message .= "<b>Кампания </b> $utm_campaign" . "<br>";
    $message .= "<b>Объявление </b> $utm_content" . "<br>";
    $message .= "<b>Ключевая фраза </b> $utm_term" . "<br>";
    $message .= "<br>";
    if(isset($cash_value) && $cash_value !== ''){
        $message .= "<b>Выбранный вариант оплаты </b> $cash_value" . "<br>";
    }
    if(isset($email) && $email !== ''){
        $message .= "<b>E-mail </b> $email" . "<br>";
    }

    $mail->Body = $message;

// Проверяем отравленность сообщения
    if ($mail->send()) {
        echo "$msg";
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
