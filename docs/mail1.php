<?php

$to      = 'kapstroi2014@yndex.ru';
$subject = "Заявка с сайта Солнечный2017.РФ";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);

$message = "
Имя заказчика: $name
Телефон: $phone

";
$headers = 'From: ' . $_POST['name'] . ' <kapstroi2014@yndex.ru>' . "\r\n" .
    'Reply-To: kapstroi2014@yndex.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: index.html');
exit;
