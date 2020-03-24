<?php
require_once './inicializacion.php';

	$lineas = $_POST['nombre'];

	$sql="SELECT nombre
	            FROM LINEAS_DE_INVESTIGACION
	            WHERE nombre LIKE '{$_POST['nombre']}'";
	        $verificacion = sql2row($sql);
	if ($verificacion > 0){
		$m="Linea <strong>$lineas</strong> La linea de investigación ya esta Registrada con exito.";
		ir("mensaje.php?m=$m&d=lineas.php");
	}
	else{
		bd_lineas_agregar($_POST);
		$m="Linea <strong>$lineas</strong> se agregó correctamente a la lista de lineas de investigación.";
		ir("mensaje.php?m=$m&d=lineas.php");
	}


$m="La linea <strong>$id</strong> se agregó correctamente a la lista de lineas.";
ir("mensaje.php?m=$m&d=lineas.php");
#vq($id);


