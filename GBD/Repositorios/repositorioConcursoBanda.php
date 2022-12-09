<?php
class repositorioConcursoBanda {
    static function insertConcursoBanda($con,$idConcur,$idBanda ): bool
    {
        $query = "INSERT INTO concurso_has_banda(Concurso_Identificador,Banda_idBanda) VALUES('$idConcur','$idBanda')";
        return $con->exec($query);
    }
}
?>