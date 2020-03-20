<?php
require_once './inicializacion.php';

	$nucleos = $_POST['nombre_corto'];

	$sql="SELECT nombre_largo
	            FROM NUCLEOS
	            WHERE nombre_largo LIKE '{$_POST['nombre_largo']}' and nombre_corto LIKE 
	            '{$_POST['nombre_corto']}' ";
	        $verificacion = sql2row($sql);
	if ($verificacion > 0){
		$m="Nucleo <strong>$nucleos</strong> El nucleo ya esta Registrado con exito.";
		ir("mensaje.php?m=$m&d=nucleos.php");
	}
	else{
		bd_nucleos_agregar($_POST);
		$m="Nucleo <strong>$nucleos</strong> se agregó correctamente a la lista de nucleos.";
		ir("mensaje.php?m=$m&d=nucleos.php");
	}


$m="El nucleo <strong>$id</strong> se agregó correctamente a la lista de nucleos.";
ir("mensaje.php?m=$m&d=nucleos.php");
#vq($id);


