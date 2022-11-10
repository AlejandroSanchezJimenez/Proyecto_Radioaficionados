<?php
class User {
    private $nombre;
    private $ape1;
    private $ape2;
    private $nacionalidad;
    private $correo_electronico;
    private $contraseña;
    private $rol;
    private $ubicacion;
    private $foto;

    /*CONSTRUCTORES*/
    public function __construct($nombre,$ape1,$ape2,$nacionalidad,$correo_electronico,$contraseña,$rol,$ubicacion,$foto = 0)
    {
        $this->nombre=$nombre;
        $this->ape1=$ape1;
        $this->ape2=$ape2;
        $this->nacionalidad=$nacionalidad;
        $this->correo_electronico=$correo_electronico;
        $this->contraseña=$contraseña;
        $this->rol=$rol;
        $this->ubicacion=$ubicacion;
        $this->foto=$foto;
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

    public function getUbicacion() {
        return $this->ubicacion;
    }
    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function getFoto() {
        return $this->foto;
    }
    public function setFoto($foto) {
        $this->foto = $foto;
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
        $info= "<br/> Ubicación: ".$this->ubicacion;
        $info= "<br/> Foto: ".$this->foto;
    }
}
?>