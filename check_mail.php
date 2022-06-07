<?php 

require 'cls/PHPMailer/src/Exception.php';
require 'cls/PHPMailer/src/OAuth.php';
require 'cls/PHPMailer/src/PHPMailer.php';
require 'cls/PHPMailer/src/SMTP.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.underwinecavaspremium.com';                   // SMTP a utilizar. Por ej. ws7.intermedia.net.ar
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@underwinecavaspremium.com';                     // SMTP username
    $mail->Password   = 'Und3r_w1n3';                               // SMTP password      y89eRf7oP8z
    $mail->SMTPSecure = 'tsl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to //25 587

    //Recipients
    $mail->setFrom('9nicolasre@gmail.com', 'Nicolas Re');
    $mail->addAddress('info@underwinecavaspremium.com');     // Add a recipient / Name is optional

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'TEST';
    $mail->Body    = 'TEST';
    //agregar al body el resto de datos

    $mail->send();

    //mail_noReply($mail_destino, $motivo, $descripcion);

/*

    $headers = "From: ".$mail;
    $mensaje = "Hemos recibido su mensaje, \r\n a la brevedad responderemos a su consulta. \r\n Muchas gracias! \r\n [Este es un mail automatico, por favor NO responda a este correo.] \r\n \r\n Su consulta fue:\r\n". $descripcion ."\r\n";

    mail($mail_destino, 'Servicios a Casa', $mensaje, $headers);
*/
    echo 1;
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo 0;
}





 ?>