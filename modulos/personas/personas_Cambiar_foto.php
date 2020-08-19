<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id = $_SESSION['u']['id'];
//recibimos el campo de imagen
$imagen = $_FILES['imagen']['tmp_name']; 

//Formatos de arcivos 
$extensiones = array('jpg', 'jpeg', 'gif', 'png');

//carpteta donde vamos a guardar la imagen
$carpeta = '../../imagenes/perfil/';

//guardamos el nombre original de la imagen en una variable
$nombrebre_orig = $_FILES['imagen']['name']; 

//el proximo codigo es para ver que extension es la imagen
$array_nombre = explode('.',$nombrebre_orig);
$cuenta_arr_nombre = count($array_nombre);
$extension = strtolower($array_nombre[--$cuenta_arr_nombre]);

if(in_array($extension, $extensiones) == TRUE) {
	//nombre nuevo
	$nombre_nuevo = $id.'.'.$extension;
	//nombre nuevo con la carpeta
	$nombre_nuevo_con_carpeta = $carpeta.$nombre_nuevo;
	if ($_SESSION['u']['foto_perfi'] != 'NULL') {
		//eliminamos el archivo si existe y subimos el nuevo
		$actual=$id=$id = $_SESSION['u']['foto_perfi'];
		$nombre_actual_con_carpeta= $carpeta.$actual;
    	unlink($nombre_actual_con_carpeta);
	    //movemos el archivo a la carpeta avatar
		$mover_archivos = move_uploaded_file($imagen , $nombre_nuevo_con_carpeta);
		$_SESSION['u']['foto_perfi']=$nombre_nuevo;
	} else {
	    //movemos el archivo a la carpeta avatar
		move_uploaded_file($imagen , $nombre_nuevo_con_carpeta);
	}
	
	bd_usuarios_cambiar_foto_perfil($nombre_nuevo);
}
ir('./personas_datos.php');