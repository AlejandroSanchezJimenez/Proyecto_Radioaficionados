<header id="main-header">
    <div class="cabecera">
        <img onclick="window.location.href='?menu=inicio'" class="icon" src="Helpers/Media/icon.png">
        <center><img onclick="window.location.href='?menu=inicio'" class="logo" src="Helpers/Media/logoblanco.png"></center>
        <img class="menu" src="Helpers/Media/menulinea.png">
        <?php
        session_start();
        if (!isset($_SESSION['Indicativo'])) {
        ?>
            <button class="boton-transparente" onclick="window.location.href='?menu=login'">INICIAR SESIÓN</button>;
        <?php
        } else {
        ?>
            <button class="boton-transparente-2" onclick="window.location.href='?menu=cierraSesion'"><img src="Helpers\Media\logout.png" height ="30" width="30" /></button>;
            <button class="boton-transparente" onclick="window.location.href='?menu=perfil'" onclick="return confirm('Are you sure?')"><?php echo Session::getAttribute("Indicativo") ?></button>;
        <?php
        }
        ?>
    </div>
    <nav class="nav-wrap">
        <ul class="menu-icon">
            <li><a href="#"></a>
                <ul class="submenu">
                    <li><a href="?menu=concursos">Concursos</a></li>
                    <li><a href="?menu=quienessomos">Quiénes somos</a></li>
                    <li><a href="?menu=foro">Foros</a></li>
                    <li><a href="?menu=Mensajes">Mensajes</a></li>
                    <?php
                    if (isset($_SESSION['Indicativo'])) {
                        $indicativo = Session::getAttribute('Indicativo');
                        $rol = repositorioUser::getAnybyIndicativo(Conexion::getConnection(), "Rol", $indicativo);
                        if (strtoupper($rol[0]) == "ADMIN") {
                    ?>
                            <li><a href="?menu=listadoconcursos">Listado de concursos</a>
                                <ul class="submenu">
                                    <li>Prueba</li>
                                </ul>
                            </li>
                            <li><a href="?menu=listadoUsers">Listado de usuarios</a></li>
                            <li><a href="?menu=creaConcursos">Crear concursos</a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </nav>
</header>