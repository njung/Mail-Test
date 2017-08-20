<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'HOSTNAME';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'USERMAIL';
$mail->Password = 'PASSWORDMAIL';
$mail->SMTPSecure = 'tls';

$mail->From = 'Mail Sender';
$mail->FromName = 'Sender Name';
$mail->addAddress('Mail Recipient');

$mail->isHTML(true);

$mail->Subject = 'Test Mail Subject!';
$mail->Body    = 'This is SMTP Email Test';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
}
?>
