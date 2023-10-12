<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);


$mail->CharSet = "UTF-8";
$mail->setLanguage('ru', "./PHPMailer/language/");
$mail->isHTML(true);

//от кого письмо
$mail->setFrom('support@webfocus.by', "Заявка на услугу");
//кому
$mail->addAddress("info@webfocus.by");
$mail->Subject = "Заявка на услугу ВФ";
$mail->$body = '<h1>Тело письма</h1>';

if (trim(!empty($_POST['text']))) {
  $body .= '<p><b>Имя:</b>' . $_POST['text'] . '</p>';
}
if (trim(!empty($_POST['email']))) {
  $body .= '<p><b>Email:</b>' . $_POST['email'] . '</p>';
}
if (trim(!empty($_POST['tel']))) {
  $body .= '<p><b>Телефон:</b>' . $_POST['tel'] . '</p>';
}
if (trim(!empty($_POST['projectKind']))) {
  $body .= '<p><b>Тип проекта:</b>' . $_POST['projectKind'] . '</p>';
}
if (trim(!empty($_POST['description']))) {
  $body .= '<p><b>Описание:</b>' . $_POST['description'] . '</p>';
}
if (trim(!empty($_POST['usluga']))) {
  $body .= '<p><b>Услуга:</b>' . $_POST['usluga'] . '</p>';
}
if (trim(!empty($_POST['vacancy']))) {
  $body .= '<p><b>Заявка на вакансию:</b>' . $_POST['vacancy'] . '</p>';
}
if (isset($_FILES['file']) &&
    $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['file']['tmp_name'],
                         $_FILES['file']['name']);
}

$mail->Body = $body;


if (!$mail->send()) {
  $message = 'Ошибка';
} else {
  $message = "Send!";
}

$response = ['message' => $message];



header('Content-Type: application/json');
echo json_encode($response);
