<?php
class repositorioUser
{
    static function insertUser($con, User $usuario): bool
    {
        $query = "INSERT INTO user(Nombre,Ape1,Ape2,Nacionalidad,Correo_electronico,Contraseña,Rol,Ubicacion_GPS,Foto,Indicativo) VALUES('$usuario->nombre','$usuario->ape1','$usuario->ape2','$usuario->nacionalidad','$usuario->correo_electronico','$usuario->contraseña','$usuario->rol',POINT($usuario->latitud,$usuario->longitud),'$usuario->foto','$usuario->indicativo')";
        return $con->exec($query);
    }

    static function getAnybyIndicativo(PDO $con, $campo, $indicativo, int $mode = PDO::FETCH_BOTH)
    {
        $query = "SELECT $campo FROM user WHERE indicativo = '$indicativo'";
        $resul = $con->query($query);
        return $resul->fetch($mode);
    }

    static function getAllIndicativo(PDO $con)
    {
        $stmt = $con->prepare("SELECT Indicativo FROM User");
        // careful, without a LIMIT this can take long if your table is huge
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    static function getConbyIndicativo(PDO $con, $indicativo, int $mode = PDO::FETCH_BOTH)
    {
        $query = "SELECT Contraseña FROM user WHERE indicativo = '$indicativo'";
        $resul = $con->query($query);
        return $resul->fetch($mode);
    }

    static function getUserByIndicativo(PDO $con, $indicativo, int $mode = PDO::FETCH_BOTH)
    {
        $query = "SELECT indicativo,nombre,ape1,ape2,nacionalidad,x(ubicacion_gps),y(ubicacion_gps),correo_electronico,contraseña,foto FROM user WHERE indicativo = '$indicativo'";
        $resul = $con->query($query);
        return $resul->fetch($mode);
    }

    static function updateUserByIndicativo(PDO $con, $indicativo, $arrayCol, $arrayDatos)
    {
        $query = "UPDATE user SET ";
        for ($i = 1; $i <= count($arrayCol); $i++) {
            if (count($arrayCol) > $i) {
                $query = $query . $arrayCol[$i - 1] . " = '" . $arrayDatos[$i - 1] . "', ";
            } else {
                $query = $query . $arrayCol[$i - 1] . " = '" . $arrayDatos[$i - 1] . "' ";
            }
        }
        $query = $query . "WHERE indicativo = $indicativo";
        return $con->exec($query);
    }

    static function updatePassbyCorreo(PDO $con, $correo, $contraseña)
    {
        $query = "UPDATE user SET contraseña='$contraseña' WHERE correo_electronico = '$correo'";
        return $con->exec($query);
    }

    static function getAllUsers(PDO $con)
    {
        $stmt = $con->prepare("SELECT Indicativo FROM User");
        // careful, without a LIMIT this can take long if your table is huge
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    static function getUserPage(
        PDO $con,
        int $NPagina,
        int $NLineas = 10,
        int $mode = PDO::FETCH_BOTH
    ) {
        $PIni = ($NPagina - 1) * $NLineas + 1;
        $query = "SELECT Nombre,Ape1,Ape2,Nacionalidad,Correo_electronico,Contraseña,Rol,x(ubicacion_gps),y(ubicacion_gps),foto,indicativo FROM user WHERE idUser >= $PIni ORDER BY idUser LIMIT $NLineas";
        $resul = $con->query($query);
        return $resul->fetchAll($mode);
    }
}
