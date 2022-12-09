<?php
class repositorioConcursoModo {
    static function insertConcursoModo($con,$idConcur,$idModo): bool
    {
        $query = "INSERT INTO concurso_has_modo(Concurso_Identificador,Modo_idModo) VALUES('$idConcur','$idModo')";
        return $con->exec($query);
    }
}
?>