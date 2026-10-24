

<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit;
}

$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

if (
    $nombre === "" ||
    $mensaje === "" ||
    !filter_var($correo, FILTER_VALIDATE_EMAIL)
) {
    exit("Error: completa todos los campos correctamente. <a href='index.html'>Volver</a>");
}

$nombreSeguro = htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
$correoSeguro = htmlspecialchars($correo, ENT_QUOTES, "UTF-8");
$mensajeSeguro = htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>

    <h1>¡Mensaje enviado correctamente!</h1>

    <p>Gracias, <?php echo $nombreSeguro; ?>.</p>
    <p>Tu correo: <?php echo $correoSeguro; ?></p>
    <p>Tu mensaje:</p>
    <p><?php echo nl2br($mensajeSeguro); ?></p>

    <a href="index.html">Volver al inicio</a>

</body>
</html>
