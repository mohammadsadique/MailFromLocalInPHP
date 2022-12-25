<?php 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 
// Include library files 
require 'PHPMailer/PHPMailer/src/Exception.php'; 
require 'PHPMailer/PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/PHPMailer/src/SMTP.php'; 
 
// Create an instance; Pass `true` to enable exceptions 
$mail = new PHPMailer; 
 
// Server settings 
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;    //Enable verbose debug output 
$mail->isSMTP();                            // Set mailer to use SMTP 
$mail->Host = 'smtp.googlemail.com';           // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;                     // Enable SMTP authentication 
$mail->Username = 'stephen@techievolve.com';       // SMTP username 
$mail->Password = 'gerrard@4418';         // SMTP password 
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 465;                          // TCP port to connect to 
 
// Sender info 
$mail->setFrom('sadique@techievolve.com', 'MD SADIQUE'); 
$mail->addReplyTo('sadique@techievolve.com', 'MD SADIQUE'); 
 
// Add a recipient 
$mail->addAddress('sadique@techievolve.com'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Email from Localhost by MD Sadique'; 
 
// Mail body content 
$bodyContent = '<h1>How to Send Email from Localhost using PHP by MD Sadique</h1>'; 
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>MD SADIQUE</b></p>'; 
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
}