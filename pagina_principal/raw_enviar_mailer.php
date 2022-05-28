<?php

include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'panaderia.dulce.pan11@gmail.com';   
$mail->Password = 'Panaderia1999';  

$mail->setFrom('panaderia.dulce.pan11@gmail.com', 'Panaderia Dulce Pan');
$mail->addAddress('jfvr.1999@gmail.com', 'Jose Vazquez');     // Add a recipient
$mail->addReplyTo('panaderia.dulce.pan11@gmail.com', 'Panaderia Dulce Pan');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por'.$_POST['nombre'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombre'].'<br><b>Email: </b>'.$_POST['email'].'<br><b>Celular: </b>'.$_POST['celular'].'<br><b>Comentarios: </b>'.$_POST['comentarios'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="index.php";
    </script>
  ';
    echo 'Gracias '.$_POST['nombre'].' por contactarnos, nosotros nos comumnicamos contigo a la brevedad.';
}

?>