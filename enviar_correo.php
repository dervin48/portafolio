<?php

    $destinatario ="dervin48@gmail.com";

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $empresa = $_POST["empresa"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];


    $header="Enviado desde mi portafolio";
    $mensajeCompleto = $correo . "\n Atentamente: " . $nombre . $apellido. $empresa . $telefono;

    mail($destinario, $correo, $mensajeCompleto, $header);
    echo"<script>alert('correo enviado exitoasamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>
