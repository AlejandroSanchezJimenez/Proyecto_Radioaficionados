<?php
class Concurso {
    private $nombre;
    private $descripcion;
    private $fecha_ini_ins;
    private $fecha_fin_ins;
    private $fecha_ini_con;
    private $fecha_fin_con;
    private $cartel;

    /*CONSTRUCTORES*/
    public function __construct($nombre,$descripcion,$fecha_ini_ins,$fecha_fin_ins,$fecha_ini_con,$fecha_fin_con,$cartel)
    {
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->fecha_ini_ins=$fecha_ini_ins;
        $this->fecha_fin_ins=$fecha_fin_ins;
        $this->fecha_ini_con=$fecha_ini_con;
        $this->fecha_fin_con=$fecha_fin_con;
        $this->cartel=$cartel;
    }

    /*GETTERS Y SETTERS*/
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getFecha_ini_ins() {
        return $this->fecha_ini_ins;
    }
    public function setFecha_ini_ins($fecha_ini_ins) {
        $this->fecha_ini_ins = $fecha_ini_ins;
    }

    public function getFecha_fin_ins() {
        return $this->fecha_fin_ins;
    }
    public function setFecha_fin_ins($fecha_fin_ins) {
        $this->fecha_fin_ins = $fecha_fin_ins;
    }

    public function getFecha_ini_con() {
        return $this->fecha_ini_con;
    }
    public function setFecha_ini_con($fecha_ini_con) {
        $this->fecha_ini_con = $fecha_ini_con;
    }

    public function getFecha_fin_con() {
        return $this->fecha_fin_con;
    }
    public function setFecha_fin_con($fecha_fin_con) {
        $this->fecha_fin_con = $fecha_fin_con;
    }

    public function getCartel() {
        return $this->cartel;
    }
    public function setCartel($cartel) {
        $this->cartel = $cartel;
    }

    /*MUESTRAINFO*/
    public function muestra_info() {
        $info= "<h1>INFORMACIÓN DEL CONCURSO</h1>";
        $info= "Nombre: ".$this->nombre;
        $info= "<br/> Descripción: ".$this->descripcion;
        $info= "<br/> Fecha que empieza el periodo de inscripción: ".$this->fecha_ini_ins;
        $info= "<br/> Fecha que finaliza el periodo de inscripción: ".$this->fecha_fin_ins;
        $info= "<br/> Fecha que empieza el periodo de concurso: ".$this->fecha_ini_con;
        $info= "<br/> Fecha que finaliza el periodo de concurso: ".$this->fecha_fin_con;
        $info= "<br/> Cartel: ".$this->cartel;
    }
}
?>