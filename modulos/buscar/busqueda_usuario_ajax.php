<?php 
define('MOD', 'buscar'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

if( isset( $_POST['buscar'] ) and $_POST['buscar'] != '' ){
	# Muestra los resultados de la busqueda
    $usuarios=bd_usuarios_datos1('USUARIOS.id,correo',$_POST['buscar']);
    if (count($usuarios) == 0) {
     	# code...
     	echo 0;
     }else{
    	print json_encode($usuarios, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
     }
} 