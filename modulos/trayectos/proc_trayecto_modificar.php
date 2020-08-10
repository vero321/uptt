<?php 
define('MOD', 'trayectos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id=$_POST['id'];
$trayecto=$_POST['trayecto'];

bd_trayectos_modificar($id, $trayecto);

$m="El trayecto se Modifico correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../trayectos/trayectos.php");