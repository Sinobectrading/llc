<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


require 'vendor/autoload.php';

$array = $_POST;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'alexg@sinobectrading.com';                 // SMTP username
    $mail->Password = 'Alex123456$';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    // var
 	$fname = strip_tags(trim($array["fname"]));
	$fname = str_replace(array("\r","\n"),array(" "," "),$fname);
	$lname = strip_tags(trim($array["lname"]));
	$lname = str_replace(array("\r","\n"),array(" "," "),$lname);
	$email = filter_var(trim($array["email"]), FILTER_SANITIZE_EMAIL);
	$msg = trim($array["message"]);
	$subject = strip_tags(trim($array["subject"]));

    $mail->setFrom('alexg@sinobectrading.com', 'Mailer');
    $mail->addAddress('alexg@sinobectrading.com', 'Alex Gao');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "<b>Sender Name : </b>".$fname." ".$lname."</br>"."<b>Subject : </b>".$subject."</br>"."<b>Sender email address : </b>".$email."</br>"."<h4>Message : </h4>"."<blockquote>".$msg."</blockquote>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '{"success":true,"message":"Message has been sent"}';
} catch (Exception $e) {
    echo '{"success":false,"message":"Message cannot be sent"}';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>