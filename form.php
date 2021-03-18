<?php

$name = stripcslashes($_POST['name']);
$email = stripcslashes($_POST['email']);
$subject = stripcslashes($_POST['subject']);
$message = stripcslashes($_POST['message']);

$mailto = 'contact@goodoldmovies.fr';
$subject = $subject;

$error_message = 'Une erreur est survenue';
$success_message = 'Message envoyé';

$message = "Name: {$name}\r\nEmail: {$email}\r\nMessage: {$message}";

$headers = "From: {$name} <{$email}>"."\r\n"."Reply-To: {$email}"."\r\n".'X-Mailer: PHP/'.phpversion();

function validateEmail($email)
{
    if (preg_match('/^[_\\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\\.)+[a-zA-Z]{2,6}$/i', $email)) {
        return true;
    }

    return false;
}

if ((strlen($name) < 1) || (strlen($email) < 1) || (strlen($message) < 1) || false == validateEmail($email)) {
    echo $error_message;
} else {
    if (mail($mailto, $subject, $message, $headers)) {
        echo $success_message;
    } else {
        echo $error_message;
    }
}
