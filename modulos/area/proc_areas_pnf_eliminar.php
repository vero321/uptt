<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id = $_GET['id'];
bd_areas_pnf_eliminar($id);
$m="El Area de Trabajo se elimino correctamente";
	ir("../mensaje/mensaje.php?m=$m&d=../area/areas_pnf.php");