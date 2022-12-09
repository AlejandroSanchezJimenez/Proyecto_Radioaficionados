<?php
class repositorioParticipacion {
    static function insertParticipacion($con, $idUser, $idConcurso, $juez): bool
    {
        $query = "INSERT INTO participacion(user_iduser,concurso_idconcurso,juez) VALUES('$idUser','$idConcurso','$juez')";
        return $con->exec($query);
    }
}
?>