<?php
class repositorioConcurso {
    static function insertConcurso($con, Concurso $concurso): bool
    {
        $query = "INSERT INTO concurso(Nombre,Descripcion,Fecha_ini_inscripcion,Fecha_fin_inscripcion,Fecha_ini_concurso,Fecha_fin_concurso,Cartel) VALUES('$concurso->nombre','$concurso->descripcion','$concurso->fecha_ini_ins','$concurso->fecha_fin_ins','$concurso->fecha_ini_con','$concurso->fecha_fin_con','$concurso->cartel')";
        return $con->exec($query);
    }

    static function getAnybyNombre(PDO $con, $campo, $nombre, int $mode = PDO::FETCH_BOTH)
    {
        $query = "SELECT $campo FROM concurso WHERE nombre = '$nombre'";
        $resul = $con->query($query);
        return $resul->fetch($mode);
    }

    static function getAllConcursos(PDO $con)
    {
        $stmt = $con->prepare("SELECT Indicativo FROM User");
        // careful, without a LIMIT this can take long if your table is huge
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    static function getConcurPage(
        PDO $con,
        int $NPagina,
        int $NLineas = 10,
        int $mode = PDO::FETCH_BOTH
    ) {
        $PIni = ($NPagina - 1) * $NLineas + 1;
        $query = "SELECT Nombre,Descripcion,Date(fecha_ini_inscripcion),Date(fecha_fin_inscripcion),Date(fecha_ini_concurso),Date(fecha_fin_concurso),Cartel FROM concurso WHERE idConcurso >= $PIni ORDER BY idConcurso LIMIT $NLineas";
        $resul = $con->query($query);
        return $resul->fetchAll($mode);
    }
    
}
?>