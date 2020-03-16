<?php

$msg = '';
if (!empty($_POST['r_name']) && empty($_POST['honeypot'])) {

    $r_name = $_POST['r_name'];
    $r_age = $_POST['r_age'];
    $r_gender = $_POST['r_gender'];
    $r_email = $_POST['r_email'];
    $emergency_name = $_POST['emergency_name'];
    $emergency_phone = $_POST['emergency_phone'];
    $r_type = $_POST['r_type'];
    $sat_event= $_POST['sat_event'];
    $sun_event= $_POST['sun_event'];
    $free_splash= $_POST['free_splash'];
    $accommodations= $_POST['accommodations'];
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
    $mail->addReplyTo($r_email, $r_name);
    $mail->Subject = 'CAS222 ace registration form';
    $mail->isHTML(true);       
    $mail->Body = <<<EOT
Email: $r_email<br>
Name: $r_name<br>
Age: $r_age<br>
Gender: $r_gender<br>
Emergency Contact Name: $emergency_name<br>
Emergency Contact Phone Number: $emergency_phone<br>
Registering as a: $r_type<br> 
Event Sat: $sat_event<br>
Event Sun: $sun_event<br>
Free Splash: $free_splash<br>
Accommodations:$accommodations
EOT;
     
        if (!$mail->send()) {
            echo "Mailer error" . $mail->ErrorInfo;
        } else {
            include 'success.php';
        }
    } else {
        include 'register.php';
    }
?>
