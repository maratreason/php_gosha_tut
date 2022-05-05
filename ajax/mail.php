<?php

$email = trim($_POST['email']);
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

// Заголовок сообщения
$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";

// Заголовки
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

$success = mail('maratreason@mail.ru', $subject, $message, $headers);
echo $success;