
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
    $resultado = "Por favor, completa los campos correctamente.";
} else {
    $resultado = "¡Mensaje enviado correctamente!";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del formulario</title>
</head>
<body>
    <h1>
        <?php echo htmlspecialchars($resultado, ENT_QUOTES, "UTF-8"); ?>
    </h1>

    <a href="index.html">Volver al formulario</a>
</body>
</html>
