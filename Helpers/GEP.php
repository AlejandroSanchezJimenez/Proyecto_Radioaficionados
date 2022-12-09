<?php
$error=[$_GET["error"]];
$errores[] = "La contraseña de verificación no coincide. Asegúrese de escribir la misma en ambos campos antes de continuar.";
$errores[] = "Alguno de los campos obligatorios no está relleno, por favor compruébelos antes de continuar.";
$errores[] = "El archivo subido debe ser del tipo JPG, JPEG o PNG. ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/layout.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="exponeMensaje">
        <p><?php echo $errores[$_GET["error"]];?> </p> <br>
        <button class="volver" name="volver" id="volver" onclick="window.location.href='?menu=registro'";?>VOLVER AL REGISTRO</button>
    </div>
    <div class="foto-lateral-error">
        <img class="foto-error" src="../../Helpers/Media/foto-error.png">
    </div>
</body>
</html>