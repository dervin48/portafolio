<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $empresa = $_POST["empresa"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    
    $destinatario = "dervin48@gmail.com"; // Cambia a tu dirección de correo
    $asunto = "Nuevo mensaje de contacto";
    $mensaje = "Nombre: $nombre $apellido\n";
    $mensaje .= "Empresa: $empresa\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Correo Electrónico: $correo\n";
    
    mail($destinatario, $asunto, $mensaje);
    
    // Redirige a una página de confirmación o muestra un mensaje
    header("Location: confirmacion.html");
}
?>
