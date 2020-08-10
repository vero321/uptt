<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id = $_GET['id'];
bd_trayecto_pnf_eliminar($id);
$m="El trayecto se Elimino correctamente";
	ir("../mensaje/mensaje.php?m=$m&d=../trayectos_pnf/trayectos_pnf.php");