<?php 
define('MOD', 'centro_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

	$centros = $_POST['nombre'];

	$sql="SELECT nombre
	            FROM CENTROS_DE_INVESTIGACION
	            WHERE nombre LIKE '{$_POST['nombre']}'";
	        $verificacion = sql2row($sql);
	if ($verificacion > 0){
		$m="Centro <strong>$centros</strong> El centro de investigación ya esta Registrado con exito.";
		ir("../mensaje/mensaje.php?m=$m&d=../centro_de_investigacion/centros.php");
	}
	else{
		bd_centros_agregar($_POST);
		$m="Centro <strong>$centros</strong> se agregó correctamente a la lista de centros de investigación.";
		ir("../mensaje/mensaje.php?m=$m&d=../centro_de_investigacion/centros.php");
	}


$m="El centro <strong>$id</strong> se agregó correctamente a la lista de centros.";
ir("../mensaje/mensaje.php?m=$m&d=../centro_de_investigacion/centros.php");
#vq($id);


