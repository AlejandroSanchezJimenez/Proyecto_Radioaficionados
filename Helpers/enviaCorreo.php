<?php
use PHPMailer\PHPMailer\PHPMailer;
class enviaCorreo
{
  static function enviaCorreoRecuperacion($correo)
  {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    // cambiar a 0 para no ver mensajes de error
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 587;
    // introducir usuario de google
    $mail->Username   = "asajiradio@gmail.com";
    // introducir clave
    $mail->Password   = "hwpufjieakkcjeqp";
    $mail->SetFrom('asajiradio@gmail.com', 'Asaji-Radio');
    // asunto
    $mail->Subject    = utf8_decode("Recupera tu contraseña ahora");
    // cuerpo
    $mail->MsgHTML(file_get_contents('Vista\Mantenimiento\correoRecuperacion.php'));
    // adjuntos
    // $mail->addAttachment("Helpers\Media\usuario.png");
    // destinatario
    $address = $correo;
    $mail->AddAddress($address, "Yo");
    // enviar
    $resul = $mail->Send();
    if (!$resul) {
      echo "Error" . $mail->ErrorInfo;
    } else {
      echo "Si el correo que ha ingresado corresponde a alguna cuenta de Asaji-Radio, recibirá un correo con las instrucciones para restablecer su contraseña.";
    }
  }
}
