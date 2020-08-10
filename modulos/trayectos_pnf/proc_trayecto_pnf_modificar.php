<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id = $_POST['id'];
$id_trayecto = $_POST['trayecto'];

bd_trayecto_pnf_modificar($id, $id_trayecto);

$m="trayecto modificado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../trayectos_pnf/trayectos_pnf.php");