<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id_trayecto=$_POST['id_trayecto'];
$nombre=$_POST['nombre'];

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];
$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];

bd_secciones_agregar($nombre, $id_trayecto, $id_pnf, $id_nucleo);
$m="Seccion agregada correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../secciones/secciones.php?t=$id_trayecto");