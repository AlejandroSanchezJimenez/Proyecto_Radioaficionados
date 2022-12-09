<?php
class Metodos {

    public static function imgEncode_64() {
        $imagen=file_get_contents($_FILES['foto']['tmp_name']);
        $path = $_FILES['foto']['tmp_name'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $img= 'data:image/' . $type . ';base64,' . base64_encode($imagen);
        return $img;
    }

    public static function creaIndicativo($pais,$nombre,$ape1,$ape2) {
        $indicativo=$pais.rand(0,9).substr($nombre,0,1).substr($ape1,0,1).substr($ape2,0,1);
        return $indicativo;
    }

    public static function is_valid_email($str)
        {
        return (false !== strpos($str, "@") && false !== strpos($str, "."));
        }
}
