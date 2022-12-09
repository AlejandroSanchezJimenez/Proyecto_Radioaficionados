<?php
class Principal
{
    public static function main()
    {
        require_once 'Autoload/autoloader.php';
        require "vendor/autoload.php";
        require_once 'Vista/Principal/layout.php';
    }
}
Principal::main();
?>