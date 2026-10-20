
<?php
$nombre = htmlspecialchars($_POST["nombre"] ?? "", ENT_QUOTES, "UTF-8");
$correo = htmlspecialchars($_POST["correo"] ?? "", ENT_QUOTES, "UTF-8");
$mensaje = htmlspecialchars($_POST["mensaje"] ?? "", ENT_QUOTES, "UTF-8");

if ($nombre === "" || $mensaje === "" || !filter_var($_POST["correo"] ?? "", FILTER_VALIDATE_EMAIL)) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje recibido</title>
</head>
<body>
    <h1>¡Mensaje enviado correctamente!</h1>

    <p>Gracias, <?php echo $nombre; ?>.</p>
    <p>Tu correo: <?php echo $correo; ?></p>
    <p>Tu mensaje: <?php echo nl2br($mensaje); ?></p>

    <a href="index.html">Volver al inicio</a>
</body>
</html>

