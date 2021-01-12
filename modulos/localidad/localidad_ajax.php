<?php 
define('MOD', 'localidad'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
#Es archivo develve como resustado una lista de municipios o parroquias segun los paramitros que resiva por ajax

# !IMPORTATE los datos devueltos estan en fomato JSON

if (isset($_POST['opcion']) ) {
	# code...
	$opcion = $_POST['opcion'];
	}
if (isset($_POST['estado'])) {
	# code...
	$estado = $_POST['estado'];
}
if (isset($_POST['municipio'])) {
	# code...
	$municipio = $_POST['municipio'];
}
switch ($opcion) {
	case 0:
		# code...
		$data = bd_ubicaciones('municipio',$estado);
		break;
	case 1:
		# code...
		$data = bd_ubicaciones('parroquia',$municipio);
		break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
