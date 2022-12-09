<?php
function mi_autocargador($clase) {
    $root=$_SERVER["DOCUMENT_ROOT"];
    if (file_exists($root.'/Proyecto_Radioaficionados/Helpers/'.$clase.'.php')) {
        include $root.'/Proyecto_Radioaficionados/Helpers/' . $clase . '.php';
    }
    else if (file_exists($root.'/Proyecto_Radioaficionados/Clases/'.$clase.'.php')) {
        include $root.'/Proyecto_Radioaficionados/Clases/' . $clase . '.php';
    }
    else if (file_exists($root.'/Proyecto_Radioaficionados/GBD/'.$clase.'.php')) {
        include $root.'/Proyecto_Radioaficionados/GBD/' . $clase . '.php';
    }
    else if (file_exists($root.'/Proyecto_Radioaficionados/GBD/Repositorios/'.$clase.'.php')) {
        include $root.'/Proyecto_Radioaficionados/GBD/Repositorios/' . $clase . '.php';
    }
}

spl_autoload_register('mi_autocargador');
?>