<?php 
define('MOD', 'comunidad'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

#Devueleve una lista de las comundades que cumplan con los termnos de la busqueda 

# !IMPORTATE los datos devueltos estan en fomato JSON

if( isset( $_POST['buscar'] ) and $_POST['buscar'] != '' ){
	# Muestra los resultados de la busqueda
	$buscar = $_POST['buscar'];
    #$data=bd_buscar('COMUNIDAD', 'nombre, siglas', $buscar);
	$data = bd_buscar('COMUNIDADES', 'nombre_comunidad, siglas' , $buscar);

    if (count($data) == 0) {
     	# code...
     	echo 0;
     }else{
		print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX

     }
} 