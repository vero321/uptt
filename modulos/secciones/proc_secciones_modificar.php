<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();


$id=$_POST['id_seccion'];
$nombre=$_POST['nombre'];
$id_trayecto=$_POST['id_trayecto'];

bd_secciones_modificar($id, $nombre);

$m="Seccion modifico correctamente";
ir("../mensaje/mensaje.php?m=$m&d=../secciones/secciones.php?t=$id_trayecto");