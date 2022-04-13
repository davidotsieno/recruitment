<?php
require 'PHPMailerAutoload.php';
require 'credential.php'; 

$mail = new PHPMailer;

$mail->SMTPDebug =false;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'Password Reset');
$mail->addAddress('ongidigeofrey@gmail.com');     // Add a recipient
$mail->addAddress('edwina.brenda217@gmail.com');               // Name is optional
$mail->addReplyTo(EMAIL);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = ' Password reset';
$mail->Body    = 'click the link below to reset your password <a href="http://localhost/KIBU_WORKSTUDY_SYSTEM/emails.php">_/auth/action?mode=resetPassword&oobCode=yOseQEDvc7rQ_gk0V-VyGUKd3IJEEn6ML4Br8Mhw9fQAAAF862CmhQ&apiKey=AIzaSyCUkmNuBb3TsZ-yr8muZdhm005nHsHy-J8&lang=en</a>';
$mail->AltBody = 'thiw wvdfyf';

if(!$mail->send()) {
    echo '<script>alert("oops ! something went wrong ! please check your internet connection")</script>';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else { 
    echo '<script>alert("An email with a reset link has been sent to your email. Please click the link to reset your password")</script>';
    
}
?>