<?php

$msg = '';
if (!empty($_POST['myName']) && empty($_POST['honeypot'])) {

    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myCategory = $_POST['myCategory'];
    $myComment= $_POST['myComment'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mail.kakitty.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "phpmailer@kakitty.webhostingforstudents.com";
    $mail->Password = "Persimmoneko8";
    $mail->setFrom('phpmailer@kakitty.webhostingforstudents.com', 'Eriko Maekawa');
    $mail->addAddress('eriko.maekawa@pcc.edu', 'Eriko Maekawa');
    $mail->addReplyTo($myEmail, $myName);
    $mail->Subject = 'CAS222 ace contact form';
    $mail->isHTML(true);       
    $mail->Body = <<<EOT
Email: $myEmail<br>
Name: $myName<br>
Category: $myCategory<br>
Message:$myComment
EOT;
     
        if (!$mail->send()) {
            echo "Mailer error" . $mail->ErrorInfo;
        } else {
            include 'success.php';
        }
    } else {
        include 'contact.php';
    }
?>
