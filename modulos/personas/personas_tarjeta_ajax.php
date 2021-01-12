<?php 
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id=$_POST['id'];
$persona = bd_personas_datos($id);
$usuario = bd_usuarios_datos($id);
$nombre = $persona['nombre'].' '.$persona['apellido'];
$data = array(
	'id' => $persona['id'],
	'nombre' => $nombre,
	'email' => $usuario['correo'],
	'telefono' => $persona['telefono'],
	'texto' => $persona['texto']
);


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX