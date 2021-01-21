<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$estructura=bd_estructuras_datos($id=NULL, $id_tipo = $_POST['tipo_d']);

if (count($estructura) > 0) {
	# code...
	print json_encode($estructura, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
}else{
	echo 0;
}