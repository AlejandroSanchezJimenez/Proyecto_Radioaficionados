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
    <title>Document</title>
</head>

<body>
    <center>
        <button class="a_añade_Concur">Nuevo mensaje</button>
        <br><br><br>
        <table id="tabla">
            <tr>
                <th colspan='7'>
                    <h2>Mensajes</h2>
                </th>
            </tr>
            <tr>
                <th id="indicativo">Indicativo</th>
                <th id="concurso">Concurso</th>
                <th id="modo">Modo</th>
                <th id="banda">Banda</th>
                <th id="fecha">Fecha</th>
                <th id="hora">Hora</th>
                <th id="validado">Validar</th>
            </tr>
            <?php
            $pagina = repositorioMensaje::getMensajePage(Conexion::getConnection(),$page, 10);
            if (empty($pagina)) {
                echo "<tr><td colspan='7'>No hay mensajes que validar en este momento</td></tr>";
            } else {
                foreach ($pagina as $value) {
                    echo "<tr>
                            <td>$value[0]</td>
                            <td>$value[1]</td>" . "  
                            <td>$value[2]</td>
                            <td>$value[3]</td>
                            <td>$value[4]</td>
                            <td>$value[5]</td>
                            <td>$value[6]</td>
                            <td><input type='checkbox'></td>
                        </tr>";
                }
            }
            ?>
            </tr>
            <tr>
                <td colspan="7">
                    <button id="anterior" page=<?php echo "$page"; ?>>◀</button>
                    Página: <?php echo $page ?>
                    <button id="siguiente" page=<?php echo "$page"; ?>>▶</button>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>