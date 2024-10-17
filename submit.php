<?php
$to = "osva.gardu021003@gmail.com";  // Reemplaza con tu dirección de correo
$subject = "Prueba de correo";
$message = "Este es un correo de prueba.";
$headers = "From: osva.gardu021003@gmail.com";  // Cambia tudominio.com por el tuyo

if(mail($to, $subject, $message, $headers)) {
    echo "Correo enviado exitosamente";
} else {
    echo "Error al enviar el correo";
}
?>
