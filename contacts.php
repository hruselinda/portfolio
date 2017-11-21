<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {

    //Recipients
    $mail->setFrom('example@mail.com', 'Client');
    $mail->addAddress('example@mail.co.uk', 'Me');

    //get _POST email of the client
    $mail->addReplyTo($_POST["email"], 'Information');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Job offer';
    $mail->Body    = $_POST["message"];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}