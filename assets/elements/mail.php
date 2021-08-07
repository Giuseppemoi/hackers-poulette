<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./vendor/autoload.php";

$mail = new PHPMailer(true);


$post_not_empty =   !empty($array_post["name"]) && 
                    !empty($array_post["firstname"]) && 
                    !empty($array_post["gender"]) && 
                    !empty($array_post["email"]) && 
                    !empty($array_post["country"]) && 
                    !empty($array_post["message"]);

$post_is_set =  isset($_POST["name"]) &&
                isset($_POST["firstname"]) &&
                isset($_POST["gender"]) &&
                isset($_POST["email"]) &&
                isset($_POST["country"]) &&
                isset($_POST["msg"]);

if ($post_is_set && $post_not_empty) {
    try {
        //Server settings
        $mail->isSMTP();                        //Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io'; //Set the SMTP server to send through
        $mail->SMTPAuth   = true;               //Enable SMTP authentication
        $mail->Username   = '71a34291276074';   //SMTP username
        $mail->Password   = '8667f02d948ffc';   //SMTP password
        $mail->Port       = 2525;               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('noreply@hackerpoulet.be', 'Hackers Poulette');
        $mail->addAddress($array_post["email"], $array_post["firstname"] . " " . $array_post["name"]); //Add a recipient (french => destinataire)
    
        //Content
        $mail->isHTML(true);                      //Set email format to HTML
        $mail->Subject = $array_post["subject"];
        $mail->Body    = "We have received your message and we will answer you as soon as possible
            Informations Provided : 
            <br> {$array_post['firstname']} 
            <br> {$array_post['name']} 
            <br> {$array_post['gender']} 
            <br> {$array_post['email']} 
            <br> {$array_post['country']} 
            <br> {$array_post['subject']} 
            <br> {$array_post['message']}";
        $mail->AltBody = 'We have received your message and we will answer you as soon as possible';
    
        $mail->send();
        reset_post(); // call the function to reset $_POST and varaiables
        echo '<p class="msg_sent">Message has been sent</p>';
    } catch (Exception $e) {
        echo "<p class='msg_not_sent'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
    }
}