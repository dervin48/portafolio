<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $destino = 'dervin48@gmail.com'; // Cambia esto por tu dirección de correo de Gmail
    $asuntoCorreo = 'Nuevo mensaje de contacto: ' . $asunto;
    $mensajeCorreo = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";

    $headers = "From: $correo\r\n";

    // Envía el correo
    mail($destino, $asuntoCorreo, $mensajeCorreo, $headers);

    // Redirecciona a una página de confirmación
    header('Location: index.php');
}
?>