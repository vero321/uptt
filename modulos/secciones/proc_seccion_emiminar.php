<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id=$_GET['id'];
$id_trayecto=$_GET['id_trayecto'];

bd_secciones_eliminar($id);
$m="Seccion elminada correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../secciones/secciones.php?t=$id_trayecto");