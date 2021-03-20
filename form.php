<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/responsiv.css">
<link rel="icon" href="assets/img/favicon.png"/>
<?php

$name = stripcslashes($_POST['name']);
$email = stripcslashes($_POST['email']);
$subject = stripcslashes($_POST['subject']);
$message = stripcslashes($_POST['message']);

$mailto = 'contact@alainwehbe.com';
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
        ?>
        <div class="valid">
            <p class="validp">Message envoyé</p>
            <a href="/" class="validbut">Retour au site</a>
        </div>
        <?php
    } else {
        ?>
        <div class="valid">
            <p class="validp">Erreur message non envoyé</p>
            <a href="/" class="validbut">Retour au site</a>
        </div>
        <?php
    }
}
