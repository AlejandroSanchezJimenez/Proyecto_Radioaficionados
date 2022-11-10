<?php
function mi_autocargador($clase) {
    $root=$_SERVER["DOCUMENT_ROOT"];
    if (file_exists($root.'/proyecto_objetos/clases/'.$clase.'.php')) {
        include $root.'/proyecto_objetos/clases/' . $clase . '.php';
    }
    else if (file_exists($root.'/helpers/'.$clase.'.php')) {
        include $root.'/proyecto_objetos/helpers/' . $clase . '.php';
    }
    else if (file_exists($root.'/modelo/'.$clase.'.php')) {
        include $root.'/proyecto_objetos/modelo/' . $clase . '.php';
    }
}

spl_autoload_register('mi_autocargador');
?>