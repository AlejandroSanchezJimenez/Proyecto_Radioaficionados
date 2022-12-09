<?php
if (isset($_SESSION['Correo'])) {
    if (isset($_POST["enviaEmail"])) {
        $correo = Session::getAttribute('Correo');
        repositorioUser::updatePassbyCorreo(Conexion::getConnection(), $correo, $_POST["contraseña"]);
        Session::destroySession();
    }
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
    <div class="recuperaContraseña">
        <h1>RECUPERAR CONTRASEÑA</h1>
        <hr />
        <br><br>
        <form class="recuperaForm" action="" method="post" enctype="multipart/form-data">
            <label for="contraseña">Contraseña *</label><br>
            <input type="password" name="contraseña" id="contraseña" placeholder="Escriba una contraseña">
            <p class="errorFill"></p>
            <div id="errorDiffPass"> </div>
            <div id="errorSmallPass"></div>
            <p class="advice">Se recomienda utilizar una contraseña única para cada sitio web</p><br>
            <label for="confi_contraseña">Confirmar contraseña *</label><br>
            <input type="password" name="confi_contraseña" id="confi_contraseña" placeholder="Escriba de nuevo la contraseña">
            <br><br>
            <input class="enviaEmail" type="submit" name="enviaEmail" value="CONTINUAR">
        </form>
    </div>
</body>

</html>