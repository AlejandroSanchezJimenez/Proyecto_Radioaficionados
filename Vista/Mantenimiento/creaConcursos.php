<?php
if (isset($_POST['añadeConcur'])) {
    $nombre=$_POST["nombre"];
    $idConcurso = repositorioConcurso::getAnybyNombre(Conexion::getConnection(), 'idConcurso', $nombre);

    $imagen = file_get_contents($_FILES['cartel']['tmp_name']);
    $path = $_FILES['cartel']['tmp_name'];
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $img = 'data:image/' . $type . ';base64,' . base64_encode($imagen);
    $concurso = new Concurso($_POST['nombre'], $_POST['descripcion'], $_POST['fecha-ini-ins'], $_POST['fecha-fin-ins'], $_POST['fecha-ini-con'], $_POST['fecha-fin-con'], $img);
    if (repositorioConcurso::insertConcurso(Conexion::getConnection(), $concurso)) {
        $nombre=$_POST["nombre"];
        $idConcurso = repositorioConcurso::getAnybyNombre(Conexion::getConnection(), 'idConcurso', $nombre);
    }

    foreach ($_POST['jueces'] as $selectedOption) {
        $idUser = repositorioUser::getAnybyIndicativo(Conexion::getConnection(), 'idUser', $selectedOption);
        repositorioParticipacion::insertParticipacion(Conexion::getConnection(), $idUser[0], $idConcurso[0], true);
    }
    foreach ($_POST['banda'] as $selectedOption) {
        $idbanda = repositorioBanda::getIdBanda(Conexion::getConnection(),$selectedOption);
        repositorioConcursoBanda::insertConcursoBanda(Conexion::getConnection(),$idConcurso[0],$idbanda[0]);
    }
    foreach ($_POST['modo'] as $selectedOption) {
        $idModo = repositorioModo::getIdModo(Conexion::getConnection(),$selectedOption);
        repositorioConcursoModo::insertConcursoModo(Conexion::getConnection(),$idConcurso[0],$idModo[0]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Vista\Principal\JS\layout.js"></script>
    <title>Document</title>
</head>

<body>
    <center>
        <div class="creaconcursos">
            <br>
            <h1>Crear un concurso</h1>
            <br><br>
            <form class="añadeConcurso" action="" method="post" enctype="multipart/form-data">
                <div class="agrupaForm-Concur">
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="nombre">Nombre:</label><br>
                        <input type="text" name="nombre" id="nombre" class="concurso">
                    </div>
                    <br><br>
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="descripcion">Descripcion:</label><br>
                        <textarea type="text" rows="7" cols="30" name="descripcion" id="descripcion" class="descripcion"></textarea>
                    </div>
                    <br><br>
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="cartel">Cartel:</label><br>
                        <input type="file" name="cartel" id="cartel" class="concurso">
                    </div>
                </div>
                <br><br>
                <div class="agrupaForm-Concur">
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="fecha-ini-ins">Inicio de inscripción:</label><br>
                        <input type="date" name="fecha-ini-ins" id="fecha_ini_ins" class="fechas">
                    </div>
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="fecha-fin-ins">Fin de inscripción:</label><br>
                        <input type="date" name="fecha-fin-ins" id="fecha_fin_ins" class="fechas">
                    </div>
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="fecha-ini-con">Inicio del concurso:</label><br>
                        <input type="date" name="fecha-ini-con" id="fecha_ini_con" class="fechas">
                    </div>
                    <div class="agrupaCell-Concur">
                        <label class="concurso" for="fecha-fin-con">Fin del concurso:</label><br>
                        <input type="date" name="fecha-fin-con" id="fecha_fin_con" class="fechas">
                    </div>
                </div>
                <br><br>
                <div class="agrupaForm-Concur">
                    <div class="agrupaCell-Concur">
                        <label for="jueces" class="concurso">Jueces del concurso:</label>
                        <select multiple name='jueces[]' class="jueces" id="jueces[]">
                            <?php
                            $arrayIndicativos = repositorioUser::getAllIndicativo(Conexion::getConnection());
                            $i = 0;
                            while ($i < count($arrayIndicativos)) {
                            ?>
                                <option value="<?php echo $arrayIndicativos[$i]; ?>"><?php echo $arrayIndicativos[$i]; ?></option>
                            <?php
                                $i++;
                            }
                            ?>
                        </select>
                    </div>

                    <div class="agrupaCell-Concur">
                        <label for="banda" class="concurso">Bandas válidas:</label>
                        <select multiple name='banda[]' class="banda" id="banda[]">
                            <?php
                            $arrayBandas = repositorioBanda::getAllBandas(Conexion::getConnection());
                            $i = 0;
                            while ($i < count($arrayBandas)) {
                            ?>
                                <option value="<?php echo $arrayBandas[$i]; ?>"><?php echo $arrayBandas[$i]; ?></option>
                            <?php
                                $i++;
                            }
                            ?>
                        </select>
                    </div>

                    <div class="agrupaCell-Concur">
                        <label for="modo" class="concurso">Modos válidos:</label>
                        <select multiple name='modo[]' class="modo" id="modo[]">
                            <?php
                            $arrayModos = repositorioModo::getAllBandas(Conexion::getConnection());
                            $i = 0;
                            while ($i < count($arrayModos)) {
                            ?>
                                <option value="<?php echo $arrayModos[$i]; ?>"><?php echo $arrayModos[$i]; ?></option>
                            <?php
                                $i++;
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br><br><br><br>
                <div class="agrupaForm-Concur">
                    <input class="añadeConcur" type="submit" name="añadeConcur" id="añadeConcur" value="CREAR">
                    <br><br>
                    <input class="reset-cambios" type="reset" value="RESTABLECER">
                </div>
            </form>
        </div>
    </center>
</body>

</html>