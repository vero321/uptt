<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$trayectos = $_POST['trayecto'];

$resultado = bd_trayecto_pnf_asignar($trayectos);

if ($resultado == TRUE) {
	# si se ejecuto la funcion
	$m="El trayecto se agregó correctamente a la lista de trayectos del PNF";
	ir("../mensaje/mensaje.php?m=$m&d=../trayectos_pnf/trayectos_pnf.php");
}else{
	$m="No se pudo realizar el registro Debid a que el rol de usuario no cumple con los parametros establecidos";
	ir("../mensaje/mensaje.php?m=$m&d=../trayectos_pnf/trayectos_pnf.php");
}