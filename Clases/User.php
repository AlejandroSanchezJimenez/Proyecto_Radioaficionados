<?php
class User {
    public $nombre;
    public $ape1;
    public $ape2;
    public $nacionalidad;
    public $correo_electronico;
    public $contraseña;
    public $rol;
    public $latitud;
    public $longitud;
    public $foto;
    public $indicativo;

    /*CONSTRUCTORES*/
    public function __construct($nombre,$ape1,$ape2,$nacionalidad,$correo_electronico,$contraseña,$rol,$latitud,$longitud,$foto,$indicativo = 0)
    {
        $this->nombre=$nombre;
        $this->ape1=$ape1;
        $this->ape2=$ape2;
        $this->nacionalidad=$nacionalidad;
        $this->correo_electronico=$correo_electronico;
        $this->contraseña=$contraseña;
        $this->rol=$rol;
        $this->latitud=$latitud;
        $this->longitud=$longitud;
        $this->foto=$foto;
        $this->indicativo=$indicativo;
    }

    /*GETTERS Y SETTERS*/
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApe1() {
        return $this->ape1;
    }
    public function setApe1($ape1) {
        $this->ape1 = $ape1;
    }

    public function getApe2() {
        return $this->ape2;
    }
    public function setApe2($ape2) {
        $this->ape2 = $ape2;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }
    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function getCorreo_electronico() {
        return $this->correo_electronico;
    }
    public function setCorreo_electronico($correo_electronico) {
        $this->correo_electronico = $correo_electronico;
    }

    public function getContraseña() {
        return $this->contraseña;
    }
    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function getRol() {
        return $this->rol;
    }
    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function getLatitud() {
        return $this->latitud;
    }
    public function setUbicacion($latitud) {
        $this->latitud = $latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }
    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function getFoto() {
        return $this->foto;
    }
    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getIndicativo() {
        return $this->indicativo;
    }
    public function setIndicativo($indicativo) {
        $this->nombre = $indicativo;
    }

    /*MUESTRAINFO*/
    public function muestra_info() {
        $info= "<h1>INFORMACIÓN DEL USUARIO</h1>";
        $info= "Nombre: ".$this->nombre;
        $info= "<br/> 1er Apellido: ".$this->ape1;
        $info= "<br/> 2do Apellido: ".$this->ape2;
        $info= "<br/> Nacionalidad: ".$this->nacionalidad;
        $info= "<br/> Correo electrónico: ".$this->correo_electronico;
        $info= "<br/> Contraseña: ".$this->contraseña;
        $info= "<br/> Rol: ".$this->rol;
        $info= "<br/> Latitud: ".$this->latitud;
        $info= "<br/> Longitud: ".$this->longitud;
        $info= "<br/> Foto: ".$this->foto;
        $info= "<br/> Indicativo: ".$this->indicativo;

        return $info;
    }
}
?>