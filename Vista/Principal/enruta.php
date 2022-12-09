<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "login") {
        require_once 'Vista/Login/login.php';
    }
    if ($_GET['menu'] == "registro") {
        require_once 'Vista/Login/registro.php';  
    }
    if ($_GET['menu'] == "listadoconcursos") {
        require_once 'Vista/Mantenimiento/listadoConcursos.php'; 
    }
    if ($_GET['menu'] == "concursos") {
        require_once 'Vista/Mantenimiento/Concursos.php'; 
    }
    if ($_GET['menu'] == "quienessomos") {
        require_once 'Vista/Mantenimiento/quienessomos.php'; 
    }
    if ($_GET['menu'] == "foro") {
        require_once 'Vista/Mantenimiento/foro.php';
    }
    if ($_GET['menu'] == "perfil") {
        require_once 'Vista/Mantenimiento/perfil.php';
    }   
    if ($_GET['menu'] == "correoRecuperacion") {
        require_once 'Vista/Mantenimiento/correoRecuperacion.php';
    }    
    if ($_GET['menu'] == "recuerdaPass") {
        require_once 'Vista/Mantenimiento/recuerdaPass.php';
    }  
    if ($_GET['menu'] == "enviaEmailRecupera") {
        require_once 'Vista/Mantenimiento/enviaEmailRecupera.php';
    } 
    if ($_GET['menu'] == "cambiaContraseña") {
        require_once 'Vista/Mantenimiento/cambiaContraseña.php';
    } 
    if ($_GET['menu'] == "cierraSesion") {
        require_once 'Vista/Mantenimiento/cierraSesion.php';
    } 
    if ($_GET['menu'] == "listadoUsers") {
        require_once 'Vista/Mantenimiento/listadoUsuarios.php';
    } 
    if ($_GET['menu'] == "creaConcursos") {
        require_once 'Vista/Mantenimiento/creaConcursos.php';
    } 
    if ($_GET['menu'] == "Mensajes") {
        require_once 'Vista/Mantenimiento/Mensajes.php';
    }
}