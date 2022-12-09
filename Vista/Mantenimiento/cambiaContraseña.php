<?php
if (isset($_POST["enviaEmail"])) {
    session_start();
    Session::setAttribute('Correo',$_POST["email"]);
    header("Location: ?menu=inicio");
    enviaCorreo::enviaCorreoRecuperacion($_POST["email"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Vista\Principal\CSS\layout.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="cambiaPass">
        <h1>RESTABLECER LA CONTRASEÑA</h1>
        <hr />
        <br><br>
        <form class="cambiaPass" action="" method="post" enctype="multipart/form-data">
            <p>SI HAS OLVIDADO TU CONTRASEÑA, PROPORCIONA TU DIRECCIÓN DE CORREO ELECTRÓNICO Y TE ENVIAREMOS UN EMAIL CON INSTRUCCIONES DE CÓMO RECUPERARLA.</p>
            <br><br>
            <label for="user">Email</label><br>
            <input type="email" name="email" id="email" class="email" placeholder="Escriba su email">
            <br><br>
            <input class="enviaEmail" type="submit" name="enviaEmail" value="CONTINUAR">
        </form>
    </div>
</body>

</html>