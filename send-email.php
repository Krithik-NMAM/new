<?php
$name =$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$message= $_POST["message"];
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail= new PHPMailer(true);
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host="smtp.example.com";
$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port=587;
$mail-> Username="you@example.com";
$mail->Password="password";
$mail->setFrom($email, $name);
$mail->addAddress("kunderkrithik93@gmail.com","Krithik");
$mail->Number=$number;
$mail->Body= $message;
$mail->send();
echo "Your order has been placed"
