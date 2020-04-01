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
$theme_name = $_POST['themeName'];
$type_house= $_POST['question-quiz__form-radio-container'];
$square_house= $_POST['question-quiz__form2-radio-container'];
$cost_house= $_POST['question-quiz__form3-radio-container'];
$assembly_house= $_POST['question-quiz__form4-radio-container'];
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
    $message .="<b>Имя </b> $name" . "<br>";
    $message .="<b>Телефон </b> $phone" . "<br>";
    $message .= "<br>";
    $message .= "<b>Источник </b> $utm_source" . "<br>";
    $message .= "<b>Тип трафика </b> $utm_medium" . "<br>";
    $message .= "<b>Кампания </b> $utm_campaign" . "<br>";
    $message .= "<b>Объявление </b> $utm_content" . "<br>";
    $message .= "<b>Ключевая фраза </b> $utm_term" . "<br>";
    $message .= "<br>";
    $message .= "<b>Тип помещения </b> $type_house" . "<br>";
    $message .= "<b>Площадь помещения </b> $square_house" . "<br>";
    $message .= "<b>Выбранная стоимость </b> $cost_house" . "<br>";
    $message .= "<b>Нужен ли монтаж? </b> $assembly_house" . "<br>";
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

?>
