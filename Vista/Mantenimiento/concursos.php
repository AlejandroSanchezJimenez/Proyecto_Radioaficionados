<?php
if (isset($_GET['page']) && $_GET['page'] > 1) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$pagina = repositorioConcurso::getConcurPage(Conexion::getConnection(), $page, 10);
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
    <?php
    $pagina = repositorioConcurso::getConcurPage(Conexion::getConnection(), $page, 10);
    if (empty($pagina)) {
        echo "No hay concursos en este momento";
    } else {
        foreach ($pagina as $value) {
    ?>
            <div class="agrupaForm-Concur-show">
                <div class="agrupaCell-Concur-show">
                    <strong class="titulo">Concurso</strong>
                    <br><br>
                    <?php echo $value[0];  ?>
                </div>
                <div class="agrupaCell-Concur-show">
                    <strong class="titulo">Descripción</strong>
                    <br><br>
                    <?php echo $value[1];  ?>
                </div>
                <div class="agrupaCell-Concur-show">
                    <strong class="titulo">Cartel</strong>
                    <br><br>
                    <img src='<?php echo $value[6];  ?>' />
                </div>
                <div class="agrupaCell-Concur-show">
                    <strong class="titulo">Fin inscripción</strong>
                    <br><br>
                    <?php echo $value[3];  ?>
                </div>
                <div class="agrupaCell-Concur-show">
                    <strong class="titulo">Fecha concurso</strong>
                    <br><br>
                    <?php echo $value[4]."/<br>".$value[5];  ?>
                </div>
                <div class="agrupaCell-Concur-show">
                    <button class="participaConcurso">Participar</button>
                </div>
            </div>
    <?php
        }
    }
    ?>

</body>

</html>