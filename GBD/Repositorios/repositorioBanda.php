<?php
class repositorioBanda {
    static function getAllBandas(PDO $con)
    {
        $stmt = $con->prepare("SELECT distancia FROM Banda");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    static function getIdBanda(PDO $con, $distancia) {
        $stmt = $con->prepare("SELECT idBanda FROM Banda where distancia = '$distancia'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
?>