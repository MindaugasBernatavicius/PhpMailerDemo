<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";
$mail = new PHPMailer;

$mail->SMTPDebug = 3; 
$mail->isSMTP(); 
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;                          
$mail->Username = "a.b@gmail.com";                 
$mail->Password = "xxx";
$mail->SMTPSecure = "tls";                           
$mail->Port = 587;  

$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

$mail->addAddress("b.c@gmail.com", "Recepient Name"); //Recipient name is optional
$mail->addReplyTo("reply@yourdomain.com", "Reply");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}
