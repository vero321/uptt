<?php 
define('MOD', 'trayectos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$trayecto=$_POST['trayecto'];
bd_trayectos_agregar($trayecto);

$m="El trayecto se agregó correctamente a la lista de trayectos";
ir("../mensaje/mensaje.php?m=$m&d=../trayectos/trayectos.php");