<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();


$nombre=$_POST['nombre'];

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];
$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];

bd_areas_pnf_agregar($nombre, $id_pnf, $id_nucleo);
$m="Area agregada correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../area/areas_pnf.php");