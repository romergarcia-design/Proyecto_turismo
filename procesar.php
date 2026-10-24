
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit;
}

$nombreOriginal = trim($_POST["nombre"] ?? "");
$correoOriginal = trim($_POST["correo"] ?? "");
$mensajeOriginal = trim($_POST["mensaje"] ?? "");

if (
    $nombreOriginal === "" ||
    $mensajeOriginal === "" ||
    !filter_var($correoOriginal, FILTER_VALIDATE_EMAIL)
) {
    exit("Por favor, completa correctamente el formulario.");
}

$nombre = htmlspecialchars($nombreOriginal, ENT_QUOTES, "UTF-8");
$correo = htmlspecialchars($correoOriginal, ENT_QUOTES, "UTF-8");
$mensaje = htmlspecialchars($mensajeOriginal, ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Santivañez - Mensaje recibido</title>
</head>
<body>

    <h2>¡Mensaje recibido, bienvenido a Turismo Santivañez!</h2>

    <p>Nombre: <?php echo $nombre; ?></p>

    <p>Correo: <?php echo $correo; ?></p>

    <p>Mensaje: <?php echo nl2br($mensaje); ?></p>

    <p>Gracias por comunicarte con nosotros.
       Estamos encantados de ayudarte a conocer los atractivos turísticos
       del municipio de Santivañez.</p>

    <a href="index.html">Volver a Turismo Santivañez</a>

</body>
</html>
