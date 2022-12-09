<?php
class Validacion
{
    //Array de errores
    private $errores;

    //Constructor
    public function __construct()
    {
        $this->errores=array();
    }

    /**
     * Comprueba si esta vacio
     *
     * @param [type] $campo
     * @return boolean
     */ 
    public static function Requerido(array $campo)
    {
        for ($i=0; $i < count($campo); $i++) {
            if(empty($_POST[$campo[$i]]))
            {
                echo "falta $campo[$i]";
                return false;
            }
        }
        return true;
    }

    public static function validaFoto($foto)
    {
        if ($_FILES[$foto]['size'] !== 0) {
            return true;
        }
        else {
            echo "foto mal";
            return false;
        }
    }

    public static function validaContraseña($campo1,$campo2)
    {
        if ($_POST[$campo1]!=$_POST[$campo2]) {
            echo "contraseña distinta";
            return false;
        }
        if (strlen($_POST[$campo1]) < 8) {
            echo "contraseña pekeña";
            return false;
        }
        return true;
    }

    public static function validaTodo($foto,$campo1,$campo2,$email,$array) {
        if (Validacion::validaFoto($foto) && Validacion::validaContraseña($campo1,$campo2) && Validacion::ValidaEmail($email) && Validacion::Requerido($array)) {
            return true;
        }
        else {
            Validacion::validaFoto($foto);
            Validacion::validaContraseña($campo1,$campo2);
            Validacion::ValidaEmail($email);
            Validacion::Requerido($array);
        }
    }
    /**
     * Método que comprueba que el campo es un valor entero
     * y de manera opcional un rango de valores
     *
     * @param [String] $campo
     * @param [int] $min
     * @param [int] $max
     * @return boolean
     */
    public function EnteroRango($campo,$min=PHP_INT_MIN,$max=PHP_INT_MAX)
    {
        if(!filter_var($_POST[$campo],FILTER_VALIDATE_INT,
            ["options"=>["min_range"=>$min,"max_range"=>$max]]))
        {
            $this->errores[$campo]="Debe ser entero entre $min y $max";
            return false;
        }
        return true;
    }

    /**
     * Método que comprueba el número de caracteres de la cadena
     * entre un mínimo y un máximo
     *
     * @param [String] $campo
     * @param [integer] $max
     * @param integer $min
     * @return boolean
     */
    public function CadenaRango($campo,$max,$min=0)
    {
        if(!(strlen($_POST[$campo])>$min && strlen($_POST[$campo])<$max))
        {
            $this->errores[$campo]="Debe tener entre $min y $max caracteres";
            return false;
        }
        return true;

    }

    /**
     * Comprueba si el campo es un email válido
     *
     * @param [String] $campo
     * @return boolean
     */
    public static function ValidaEmail($campo)
    {
        if(!filter_var($_POST[$campo],FILTER_VALIDATE_EMAIL))
        {
            echo "error email";
            return false; 
        }
        return true;
    }

    public function Dni($campo)
    {
        $letras="TRWAGMYFPDXBNJZSQVHLCKE";
        $mensaje="";
        if(preg_match("/^[0-9]{8}[a-zA-z]{1}$/",$_POST[$campo])==1)
        {
            $numero=substr($_POST[$campo],0,8);
            $letra=substr($_POST[$campo],8,1);
            if($letras[$numero%23]==strtoupper($letra))
            {
                return TRUE;
            }
            else
            {
                $mensaje="El campo $campo es un Dni con letra no válida";
            }
        }
        else
        {
            $mensaje="El campo $campo no es un Dni válido";
        }
        $this->errores[$campo]=$mensaje;
        return FALSE;
    }

    /**
     * Comprueba si el campo cumple una expresión regular (patrón)
     *
     * @param [string] $campo
     * @param [string] $patron
     * @return boolean
     */
    public function Patron($campo,$patron)
    {
        if(!preg_match($patron,$_POST[$campo]))
        {
            $this->errores[$campo]="No cumple el patrón $patron";
            return false;
        }
        return true;
    }

    /**
     * Ejecuta una función que será la encargada de validar el campo
     *
     * @param [type] $campo
     * @param [type] $funcion
     * @param [type] $mensaje
     * @return boolean
     */
    public function ValidaConFuncion($campo,$funcion,$mensaje)
    {
        if(!call_user_func($funcion))
        {
            $this->errores[$campo]=$mensaje;
            return false;
        }
        return true;
    }

    /**
     * Comprueba si hay errores
     *
     * @return void
     */
    public function ValidacionPasada()
    {
        if(count($this->errores)!=0)
        {
            return false;
        }
        return true;
    }

    public function ImprimirError($campo)
    {
        return
        isset($this->errores[$campo])?'<span class="error_mensaje">'.$this->errores[$campo].'</span>':'';
    }

    public function getValor($campo)
    {
        return
        isset($_POST[$campo])?$_POST[$campo]:'';
    }

    public function getSelected($campo,$valor)
    {
        return
        isset($_POST[$campo]) && $_POST[$campo]==$valor?'selected':'';
    }

    public function getChecked($campo,$valor)
    {
        return
        isset($_POST[$campo]) && $_POST[$campo]==$valor?'checked':'';
    }
     
}