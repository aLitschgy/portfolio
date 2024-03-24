<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();


if (isset($_POST['message'])) {                        
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'litschgy.fr';                          //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'admin@litschgy.fr';                    //SMTP username
        $mail->Password   = 'by9%xzXPSTsK';                         //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST['mail'], $_POST['name']);
        $mail->addAddress('antonin.litschgy@etu.inp-n7.fr', 'Antonin Litschgy');     //Add a recipient
        //$mail->addAddress('ellen@example.com');                           //Name is optional
        //$mail->addReplyTo($_POST['mail'], $_POST['name']);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(false);                                  //Set email format to HTML
        $mail->Subject = $_POST['title'];
        $mail->Body    = $_POST['message'];
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        $_SESSION['message'] = '<div class="contact__notification right">
        <p> Your message has been sent to me. I will contact you as soon as possible </p>
        </div>';
    } catch (Exception $e) {
        $_SESSION['message'] = '<div class="contact__notification wrong">
        <p> An error occurred while sending the message. Please try again or contact me by email. </p>
        </div>';
    }

} 
header("Location: ../#contact");
?>