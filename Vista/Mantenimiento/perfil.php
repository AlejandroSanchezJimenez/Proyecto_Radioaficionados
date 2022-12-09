<?php
if(!isset($_SESSION['Indicativo'])) {
    header("Location: ?menu=login");
}
else {
    $indicativo=Session::getAttribute('Indicativo');
    $array=repositorioUser::getUserByIndicativo(Conexion::getConnection(),$indicativo);

    //definimos dos array, uno que guarda los campos que vamos a cambiar, y otro con los datos nuevos
    $campos=array();
    $valoresnuevos=array();

    //comprobamos que los campos no esten vacios, y vamos mirando uno a uno si el valor nuevo es 
    //distinto al anterior, de ser así los añadimos a la lista. Finalmente realizamos el update
    // if (isset($_FILES['foto'])&&!empty($nombre)&&!empty($apellido)) {
    //     if (strcmp($nombre,$resul[0]!==0)) {
    //         $campos[]="nombre";
    //         $valoresnuevos[]="$nombre";
    //     }
    //     if (strcmp($apellido,$resul[1]!==0)) {
    //         $campos[]="apellido";
    //         $valoresnuevos[]="$apellido";
    //     }
    //     if (strcmp($img,$resul[2]!==0)) {
    //         $campos[]="foto";
    //         $valoresnuevos[]="$img";
    //     }
    //     repositorioUser::updateUserByIndicativo(Conexion::getConnection(),$id,$campos,$valoresnuevos);
    //     header("Location:http://localhost/AccesoBD-PHP/Vista/Edita.php?id=$id");
    // }
    // else {
    //     header("Location: Error.php?error=1&page=$page");
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="Vista\Principal\CSS\layout.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Vista\Principal\JS\layout.js"></script>
    <title>Document</title>
</head>

<body class="body-perfil">
    <div class="foto-perfil">
        <img src='Helpers\Media\ejemplo.png' class='imgRedonda' />
    </div>
    <div class="cuerpo-perfil">
        <p class="titulo-cuerpo-perfil">Información del usuario</p>
        <hr />
        <form class="edita-perfil" action="" method="post" enctype="multipart/form-data">
            <div class="seccion-perfil">
                <p class="titulo-seccion">Perfil</p>
                <button class="habilita1">Cambiar</button>
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="indicativo">Indicativo</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="indicativo" id="indicativo" class="perfil" readonly value="<?php echo $array[0]?>">
                <hr />
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="nombre">Nombre</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="nombre" id="nombre" class="perfil" readonly value="<?php echo $array[1]?>">
                <hr />
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="ape1">1er Apellido</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="ape1" id="ape1" class="perfil" readonly value="<?php echo $array[2]?>">
                <hr />
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="ape2">2do Apellido</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="ape2" id="ape2" class="perfil" readonly value="<?php echo $array[3]?>">
                <hr />
            </div>
            <div class="dato-perfil">
                <label class="perfil" for="nacionalidad">Pais</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="nacionalidad" id="nacionalidad" readonly class="perfil"value="<?php echo $array[4]?>">
                <hr />
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="ubicacion">Ubicación</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="ubicacion" id="ubicacion" readonly class="perfil" value="<?php echo $array[5].", ".$array[6]?>">
                <hr />
            </div>
            <div class="seccion-perfil">
                <p class="titulo-seccion">Correo electrónico</p>
                <button class="habilita2">Cambiar</button>
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="email">Correo electrónico</label>&nbsp&nbsp&nbsp&nbsp
                <input type="email" name="email" id="email" class="perfil" readonly value="<?php echo $array[7]?>">
                <hr />
            </div>
            <div class="seccion-perfil">
                <p class="titulo-seccion">Seguridad</p>
                <button class="habilita3">Cambiar</button>
            </div>
            <div classs="dato-perfil">
                <label class="perfil" for="contraseña">Contraseña</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="password" name="contraseña" id="contraseña" readonly class="perfil" value="<?php echo $array[8]?>">
                <hr />
            </div>
            <br><br>
            <center><input class="guarda-cambios" type="submit" name="guarda-cambios" id="guarda-cambios" value="GUARDAR CAMBIOS"></center>
            <br>
            <center><input class="reset-cambios-perfil" type="reset" value="RESTABLECER"></center>
        </form>
    </div>
</body>

</html>