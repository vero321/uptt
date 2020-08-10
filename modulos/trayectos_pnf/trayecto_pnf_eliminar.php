<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

#este archivo elimina un registro de la tabla TRAYECTOS__PNF
#Necesita dos parametros para funcionar la id de la relacion en la tabla que se recive como 'id' y la id del trayecto que se recive como 'id_trayecto'

$id = $_GET['id'];
$id_trayecto = $_GET['id_trayecto'];

$trayectos=bd_trayectos_datos($id_trayecto);

$smarty->assign('id',$id);
$smarty->assign('trayectos',$trayectos);

$smarty->display('trayecto_pnf_eliminar.html');