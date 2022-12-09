<?php
class Conexion
{
    public static $host;
    public static $dbname;
    public static $usuario;
    public static $pass;

    function __construct($host, $dbname, $usuario, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->usuario = $usuario;
        $this->pass = $pass;  
    }

    static function getConnection() {
        $con = new PDO("mysql:host=localhost;dbname=proyecto_radioaficionados", "root", "");
        return $con;
   }
}

?>
