
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
    exit("Datos incorrectos. <a href='index.html'>Volver</a>");
}

$nombre = htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
$correo = htmlspecialchars($correo, ENT_QUOTES, "UTF-8");
$mensaje = htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
            padding: 50px 20px;
        }

        .contenedor {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ccc;
        }

        h1 {
            color: green;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>¡Gracias, <?php echo $nombre; ?>!</h1>

        <p>Recibimos tu mensaje.</p>

        <p><strong>Tu correo:</strong> <?php echo $correo; ?></p>

        <p><strong>Tu mensaje:</strong></p>
        <p><?php echo nl2br($mensaje); ?></p>

        <a href="index.html">Volver al inicio</a>
    </div>
</body>
</html>
