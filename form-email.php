
<?php 

/*mail destinatario y contenido a recibir*/
$email_to = "hola@telocreo.studio"; 
$contenido = "$nombre ha enviado un mensaje desde la web de alejandra.herrera<br /> Nombre: $nombre<br />Email: $email<br /> Mensaje: $mensaje";
$asunto = "Consulta desde la Web alejandra.herrera";

//Cabeceras del correo para que no llegue a spam
$header = "MIME-Version: 1.0 \r\n";
$header.= "Content-type: text/html; charset=utf-8 \r\n";

/*función para enviar mail*/
mail($email_to, $asunto, utf8_decode($contenido), $header);

//echo "<script>alert('Mensaje enviado con éxito');document.location='$regresar';</script>";
//echo '<h4>¡Mail enviado exitosamente!</h4>';
header('Location: ' . 'form-success.html');

