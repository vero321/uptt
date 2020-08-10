<?php 
define('MOD', 'trayectos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

bd_trayecto_eliminar($id=$_GET['id']);

$id = $_GET['id'];
bd_trayecto_pnf_eliminar($id);
$m="El trayecto se Elimino correctamente";
	ir("../mensaje/mensaje.php?m=$m&d=../trayectos/trayectos.php");