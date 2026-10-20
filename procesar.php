
<?php
// Verificar que el formulario se envíe mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir los datos del formulario
    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    // Validar campos vacíos
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        echo "Error: Todos los campos son obligatorios.";
        exit;
    }

    // Validar el correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Error: El correo electrónico no es válido.";
        exit;
    }

    // Mostrar los datos recibidos de forma segura
    $nombre = htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
    $correo = htmlspecialchars($correo, ENT_QUOTES, "UTF-8");
    $mensaje = htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8");

    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Formulario procesado</title>";
    echo "</head>";

    echo "<body style='font-family: Arial; text-align: center; margin: 50px;'>";

    echo "<h1>¡Mensaje recibido correctamente!</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Mensaje:</strong></p>";
    echo "<p>$mensaje</p>";

    echo "<br><a href='index.html'>Volver al inicio</a>";

    echo "</body>";
    echo "</html>";

} else {
    echo "Acceso no permitido. Envía los datos desde el formulario.";
}
?>
