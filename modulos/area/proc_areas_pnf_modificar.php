<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();


$id=$_POST['id_area'];
$nombre=$_POST['nombre'];
$id_pnf=$_POST['id_pnf'];

bd_areas_pnf_modificar($id, $nombre);

$m="El Area se modifico correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../area/areas_pnf.php");