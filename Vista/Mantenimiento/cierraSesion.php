<?php

use FontLib\Table\Type\head;

Session::destroySession();
$archivoActual = $_SERVER['PHP_SELF'];
header("refresh:0.5;url=".$archivoActual);
?>