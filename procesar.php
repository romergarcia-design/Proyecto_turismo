
<?php
$nombre = htmlspecialchars($_POST["nombre"] ?? "", ENT_QUOTES, "UTF-8");
$correo = htmlspecialchars($_POST["correo"] ?? "", ENT_QUOTES, "UTF-8");
$mensaje = htmlspecialchars($_POST["mensaje"] ?? "", ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje recibido - Turismo Santivañez</title>
</head>
<body>
    <h1>Turismo Santivañez</h1>
    <h2>¡Mensaje recibido correctamente!</h2>

    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Correo:</strong> <?php echo $correo; ?></p>
    <p><strong>Mensaje:</strong> <?php echo nl2br($mensaje); ?></p>

    <a href="index.html">Volver al formulario</a>
</body>
</html>
