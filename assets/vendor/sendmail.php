<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';


function sendInquiry($name, $email) {
  $mail = new PHPMailer(true);

  $body ="
  <img src='../assets/resource/img/logo.png'>
  <p>Good Day Mr/Mrs. $name, <br>
  ---------------------------------------------------- <br>
  Your email and concern has been recieved, and I will be in touch with you soon. 
  Hope to work with you and to your company soon. Thank you

  
  </p>";
  try {
    //Server settings
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host       = 'smtp.gmail.com';     //platform
     $mail->SMTPAuth   = true;
     $mail->Username   = 'jnoelgita@gmail.com';   //email
     $mail->Password   = 'opftkcveuhuhojhr';                                //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom($mail->Username);       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = "(Do not reply) Email has been recieved";
     $mail->Body    = $body;             //content


     $mail->SMTPDebug  = SMTP::DEBUG_OFF;
     $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

function sendClientAcc($name, $company, $concern, $email) {
  $mail = new PHPMailer(true);

  $body ="<p><b>Mr/Mrs. $name<br>
  $company<br>
  $concern</b></p>";
  try {
    //Server settings
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host       = 'smtp.gmail.com';     //platform
     $mail->SMTPAuth   = true;
     $mail->Username   = 'jnoelgita@gmail.com';   //email
     $mail->Password   = 'opftkcveuhuhojhr';                                //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom($email);       //sender
     $mail->addAddress($mail->Username);

     //Content
     $mail->isHTML(true);
     $mail->Subject = $company;
     $mail->Body    = $body;             //content


     $mail->SMTPDebug  = SMTP::DEBUG_OFF;
     $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
    //header
