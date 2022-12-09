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
        <button class="a_añade_Concur"><a href="?menu=creaConcursos">Nuevo concurso</a></button>
        <br><br><br>
        <table id="tabla">
            <tr>
                <th colspan='8'>
                    <h2>Listado de concursos</h2>
                </th>
            </tr>
            <tr>
                <th id="nombre">Nombre</th>
                <th id="apellido">Descripción</th>
                <th id="fecha_ini_ins">Fecha de inicio de inscripción</th>
                <th id="fecha_fin_ins">Fecha de fin de inscripción</th>
                <th id="fecha_ini_con">Fecha de inicio del concurso</th>
                <th id="fecha_fin_con">Fecha de fin del concurso</th>
                <th id="cartel">Cartel</th>
                <th id="accion">Acción</th>
            </tr>
            <?php
            $pagina = repositorioConcurso::getConcurPage(Conexion::getConnection(), $page, 10);
            if (empty($pagina)) {
                echo "<tr><td colspan='8'>No hay concursos en este momento</td></tr>";
            } else {
                foreach ($pagina as $value) {
                    echo "<tr>
                            <td>$value[0]</td>
                            <td>$value[1]</td>" ."  
                            <td>$value[2]</td>
                            <td>$value[3]</td>
                            <td>$value[4]</td>
                            <td>$value[5]</td>
                            <td><img src='<?php echo $value[6];  ?>' /></td>
                            <td><a href='Edita.php?id=" ."$value[0]&page=$page'>✏️</a><a href='Borrar.php?id=" ."$value[0]&page=$page'>🗑️</a></td>
                        </tr>";
                }
            }
            ?>
            </tr>
            <tr>
                <td colspan="8">
                    <button id="anterior" page=<?php echo "$page"; ?>>◀</button>
                    Página: <?php echo $page ?>
                    <button id="siguiente" page=<?php echo "$page"; ?>>▶</button>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>