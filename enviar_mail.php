<?php 

require 'cls/PHPMailer/src/Exception.php';
require 'cls/PHPMailer/src/OAuth.php';
require 'cls/PHPMailer/src/PHPMailer.php';
require 'cls/PHPMailer/src/SMTP.php';



$nombre_completo = trim($_POST['nombre']);
$ciudad = trim($_POST['ciudad']);
$pais = trim($_POST['pais']);
$telefono = trim($_POST['telefono']);
$mail = trim($_POST['mail']);
$about = trim($_POST['about']);
$asunto = trim($_POST['asunto']);
$mensaje = trim($_POST['mensaje']);
$terminos = trim($_POST['terminos']);

$cantErrores = 0;
$log="";


if ($terminos=='true') {

  //Verificacion campos seteados

  if (!isset($nombre_completo) || strlen($nombre_completo)==0) {
    $cantErrores++;
    $log .= "- Ingrese nombre \r\n";
  }

  if (!isset($ciudad) || strlen($ciudad)==0) {
    $cantErrores++;
    $log .= "- Ingrese ciudad \r\n";
  }

  if (!isset($pais) || strlen($pais)==0) {
    $cantErrores++;
    $log .= "- Ingrese país \r\n";
  }

  if (!isset($telefono) || strlen($telefono)==0) {
    $cantErrores++;
    $log .= "- Ingrese télefono \r\n";
  }

  if (!isset($mail) || strlen($mail)==0) {
    $cantErrores++;
    $log .= "- Ingrese su mail \r\n";
  }

  if (!isset($mensaje) || strlen($mensaje)==0) {
    $cantErrores++;
    $log .= "- Ingrese mensaje \r\n";
  }

  if ($cantErrores == 0) {

    //marca cantidad de caracteres
    $nombre_completo = substr($nombre_completo,0,100);
    $ciudad = substr($ciudad,0,100);
    $pais = substr($pais,0,50);
    $telefono = substr($telefono,0,30);
    $mail = substr($mail,0,250);
    $about = substr($about,0,250);
    $asunto = substr($asunto,0,250);
    $mensaje = substr($mensaje,0,1000);

    //Enviar mail
  //$html =armarBody($nombre_completo, $ciudad, $pais, $telefono, $mail, $about, $asunto, $mensaje);
  //file_put_contents('mail', $html);
  //echo json_encode($html);
    $enviado = enviarMail($nombre_completo, $ciudad, $pais, $telefono, $mail, $about, $asunto, $mensaje);

    if ($enviado) {
      $resp = array(0 => 'OK', 1 => '');
      echo json_encode($resp);
    } else {
      $resp = array(0 => 'ERROR', 1 => 'Error al enviar.');
      echo json_encode($resp);
    }
    

  } else {
    $resp = array(0 => 'ERROR', 1 => $log);
    echo json_encode($resp);
  }


} else {

  $log .= "Debe aceptar los términos y condiciones";
  $resp = array(0 => 'ERROR', 1 => $log);
  echo json_encode($resp);

}


function enviarMail($nombre_completo, $ciudad, $pais, $telefono, $email, $about, $asunto, $mensaje){
   $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
      
      $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'mail.underwinecavaspremium.com';                   // SMTP a utilizar. Por ej. ws7.intermedia.net.ar
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'info@underwinecavaspremium.com';                     // SMTP username
      $mail->Password   = 'Und3r_w1n3';                               // SMTP password      y89eRf7oP8z
      $mail->SMTPSecure = 'tsl';                                  // Enable TLS encryption, `ssl` also accepted
      //Und3rC4v45
      $mail->Port       = 587; 
  //Recipients
      $mail->setFrom($email, $nombre_completo);
      $mail->addAddress('info@underwinecavaspremium.com');     // Add a recipient / Name is optional

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $asunto;
      $html = armarBody($nombre_completo, $ciudad, $pais, $telefono, $email, $about, $asunto, $mensaje);
      $mail->Body    = $html;
      //agregar al body el resto de datos

      $mail->send();

      return true;

    } catch (Exception $e) {
      return false;
    }
}


function armarBody($nombre_completo, $ciudad, $pais, $telefono, $mail, $about, $asunto, $mensaje){
  //$html = file_get_contents('plantilla_mail.php');

  $html = "<!DOCTYPE html>
      <html>
      <head>
        <title>Contacto</title>
        <style type='text/css'>
          @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Libre+Baskerville:ital@1&family=Libre+Franklin&display=swap');
          body {
            font-family: 'Lato', sans-serif;
            position:relative;
            margin:auto;
            width: auto;
            
            display: inline-block;
          }
          body div {
            margin:1em;
            width: auto;
            padding:0em 1em 1em 1em;
            border: 1px solid black;
            display: inline-block;
          }
          h3{
            width: auto;
            display: inline-block;
            margin: 1em 0 0.5em 0;
          }
          p {
            font-weight: 300;
            font-size: 12px;
            margin: 0.4em 0;
            width: auto;
            display: inline-block;
          }
          p span{
            font-weight: 400;
            font-size: 14px;
            margin-left: 0.5em;
          }
        </style>
      </head>
      <body>
        <div>
        <h3>Contacto</h3><br>
        <p>Nombre:  <span>$nombre_completo</span></p> <br>
        <p>Ciudad:  <span>$ciudad</span></p> <br>
        <p>País:  <span>$pais</span></p> <br>
        <p>Teléfono:  <span>$telefono</span></p> <br>
        <p>¿De dónde nos conoce?:  <span>$about</span></p> <br>
        <p>Asunto:  <span>$asunto</span></p> <br>
        <p>Mensaje: <br> <span style='margin: 0;'>$mensaje</span></p>
        </div>
      </body>
      </html>";
  return $html;
}



 ?>