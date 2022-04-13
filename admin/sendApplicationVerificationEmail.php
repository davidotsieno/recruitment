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

$mail->setFrom(EMAIL, 'kdfinfo@gvt.ac.ke');
$mail->addAddress($email);     // Add a recipient
$mail->addAddress('otsienodavid2018@gmail.com');               // Name is optional
$mail->addReplyTo(EMAIL);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Applicants verification email';
$mail->Body    = 'Hello dear Applicants, your application details submitted through our system has been Verified and you have succesfully been selected please carry with you the relevant document on the final day of the medical check up . <br>
                you will be notified on the day of the final check up';
$mail->AltBody = 'thiw wvdfyf';

if(!$mail->send()) {
    echo '<script>alert("oops ! something went wrong ! please check your internet connection")</script>';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else
 { 
    echo '<script>alert("Thank you, your application has been Verified")</script>';
    
}
?>