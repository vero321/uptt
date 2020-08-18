<?php
define('MOD', 'area'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";


	$areas = $_POST['nombre'];

	$sql="SELECT nombre
	            FROM AREAS
	            WHERE nombre LIKE '{$_POST['nombre']}'";
	        $verificacion = sql2row($sql);
	if ($verificacion > 0){
		$m="El area de Trabajo <strong>$areas</strong> se registro con exito.";
		ir("../mensaje/mensaje.php?m=$m&d=../area/areas.php");
	}
	else{
		bd_areas_agregar($_POST);
		$m="El area de Trabajo <strong>$areas</strong> se registro con exito.";
		ir("../mensaje/mensaje.php?m=$m&d=../area/areas.php");
	}


$m="El area de Trabajo <strong>$areas</strong> se registro con exito.";
		ir("../mensaje/mensaje.php?m=$m&d=../area/areas.php");
#vq($id);










