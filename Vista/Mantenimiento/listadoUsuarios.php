<?php
if (isset($_GET['page']) && $_GET['page'] > 1){
    $page = $_GET['page'];
} else {
    $page = 1;
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
    <center>
        <button class="a_añade_Concur"><a href="?menu=registro">Nuevo usuario</a></button>
        <br><br><br>
        <table id="tabla">
            <tr>
                <th colspan='11'>
                    <h2>Listado de usuarios</h2>
                </th>
            </tr>
            <tr>
                <th id="indicativo">Indicativo</th>
                <th id="nombre">Nombre</th>
                <th id="ape1">1er Apellido</th>
                <th id="ape2">2do Apellido</th>
                <th id="pais">Nacionalidad</th>
                <th id="correo_electronico">Correo electrónico</th>
                <th id="contraseña">Contraseña</th>
                <th id="rol">Rol</th>
                <th id="ubicacion_gps">Ubicacion GPS</th>
                <th id="foto">Foto</th>
                <th id="accion">Acción</th>
                
            </tr>
            <?php
            $pagina = repositorioUser::getUserPage(Conexion::getConnection(), $page, 10);
            if (empty($pagina)) {
                echo "<tr><td colspan='11'>No hay usuarios en este momento</td></tr>";
            } else {
                foreach ($pagina as $value) {
                    echo "<tr>
                            <td>$value[10]</td>
                            <td>$value[0]</td>" ."  
                            <td>$value[1]</td>
                            <td>$value[2]</td>
                            <td>$value[3]</td>
                            <td>$value[4]</td>
                            <td>$value[5]</td>
                            <td>$value[6]</td>
                            <td>$value[7], $value[8]</td>
                            <td><img src='<?php echo $value[9];  ?>' ></td>
                            <td><a href='Edita.php?id=" ."$value[0]&page=$page'>✏️</a><a href='Borrar.php?id=" ."$value[0]&page=$page'>🗑️</a></td>
                        </tr>";
                }
            }
            ?>
            </tr>
            <tr>
                <td colspan="11">
                    <button id="anterior" page=<?php echo "$page"; ?>>◀</button>
                    Página: <?php echo $page ?>
                    <button id="siguiente" page=<?php echo "$page"; ?>>▶</button>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>