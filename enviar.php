<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $mensaje = trim($_POST["mensaje"]);

    $destino = "marloncapera004@gmail.com";
    $asunto = "Nuevo mensaje del formulario";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: marloncapera200130@gmail.com";

    if (mail($destino, $asunto, $contenido, $headers)) {
        echo "Mensaje enviado correctamente ✅";
    } else {
        echo "No se pudo enviar el mensaje ❌";
    }
}
?>
