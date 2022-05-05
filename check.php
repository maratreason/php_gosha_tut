<?php

$email = trim($_POST['email']);
$message = trim($_POST['message']);
$errors = [];

if ($email == '') {
    $errors['email'][] = 'Поле "email" обязательно для заполнения';
} else if ($message == '') {
    $errors['message'][] = 'Поле "message" обязательно для заполнения';
} else if (strlen($message) < 10) {
    $errors['message'][] = 'Сообщение должно быть более 10 символов. Сейчас '.strlen($message).' символов.';
}

if (!empty($errors)) {
    foreach($errors as $error) {
        echo $error . '<br>';
    }
    exit;
}

// Заголовок сообщения
$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";

// Заголовки
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('maratreason@mail.ru', $subject, $message, $headers);

header('Location: about.php');

// echo $email . '<br>';
// echo $message . '<br>';