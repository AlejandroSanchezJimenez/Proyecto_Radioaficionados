<?php
class repositorioModo {
    static function getAllBandas(PDO $con)
    {
        $stmt = $con->prepare("SELECT identificador FROM Modo");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    static function getIdModo(PDO $con, $identificador) {
        $stmt = $con->prepare("SELECT idModo FROM Modo where identificador = '$identificador'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
?>