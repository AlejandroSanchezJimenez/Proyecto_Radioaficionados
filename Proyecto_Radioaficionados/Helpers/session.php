<?php
class Session {

    public static function iniciar ()
    {
        session_start();
    }

    public static function leer (string $clave)
    {
        return $_SESSION[$clave];
    }

    public static function existe (string $clave)
    {
        if (isset($clave)) {
            return true;
        }
        else {
            return false;
        }
    }

    public static function escribir ($clave,$valor)
    {
        if (session::existe($clave)) {
            $_SESSION[$clave]=$valor;
            return true;
        }
        else {
            return false;
        }
    }

    public static function eliminar ($clave)
    {
        unset($_SESSION[$clave]);
    }
}
?>