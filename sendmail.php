<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
$msg = '';
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
        //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    // $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'mail.ukraine.com.ua';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // $mail->Username = 'test@divclass.org';                 // SMTP username
    // $mail->Password = '';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 25;                                    // TCP port to connect to


$mail->setFrom('test@divclass.org', 'technocomplex');
$mail->addAddress('1unitedcrew@gmail.com', 'technocomplex');

$mail->isHTML(true); 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$texts = $_POST['texts'];
$txt = $_POST['txt'];

$msg = '';
if (array_key_exists('phone', $_POST)) {
    $mail->Subject = 'Заявка';
    $mail->Body = "$name<br>$phone<br>$email<br>$txt<br>$texts";
    if (!$mail->send()) {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg .= "Message sent!";
    }
}




?>
