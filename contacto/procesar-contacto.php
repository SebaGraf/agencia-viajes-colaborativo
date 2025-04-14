<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo "<h2>Gracias por contactarnos, $nombre</h2>";
    echo "<p>Te responderemos pronto al correo: $correo</p>";
    echo "<p>Tu mensaje: $mensaje</p>";
} else {
    echo "Error al procesar el formulario.";
}
?>
