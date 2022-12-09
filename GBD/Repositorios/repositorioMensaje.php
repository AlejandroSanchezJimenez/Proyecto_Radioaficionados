<?php
class repositorioMensaje {
    static function getMensajePage(
        PDO $con,
        int $NPagina,
        int $NLineas = 10,
        int $mode = PDO::FETCH_BOTH
    ) {
        $PIni = ($NPagina - 1) * $NLineas + 1;
        $query = "SELECT Participacion_User_idUser,Participacion_Concurso_idConcurso,Banda_idBanda,Modo_idModo,Date(fecha_hora_mensaje),Hour(fecha_hora_mensaje) FROM mensaje WHERE idLog >= $PIni ORDER BY idLog LIMIT $NLineas";
        $resul = $con->query($query);
        return $resul->fetchAll($mode);
    }
}
?>