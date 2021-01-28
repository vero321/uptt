<?php
define('MOD', 'nucleo'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";
	$nucleos = $_POST['nombre_corto'];
	$extension = $_POST['extension'];
	$carpeta = $_POST['id'];
	
/*	Este arccivo agrega nucleos y extenciones por igual 
	Un nucleo debe tener nombre_corto y nombre largo mientras que una extesion debe tener nombre_corto, nombre largo e id_nucleo lo cual indica que es una extecion

*/
	$sql="SELECT nombre_largo
	            FROM NUCLEOS
	            WHERE nombre_largo LIKE '{$_POST['nombre_largo']}' and nombre_corto LIKE 
	            '{$_POST['nombre_corto']}' ";
	        $verificacion = sql2row($sql); #verifica si el nomvre ya existe
	if ($verificacion > 0){
		$m="Nucleo <strong>$nucleos</strong> El nucleo ya esta Registrado con exito.";
		ir("../mensaje/mensaje.php?m=$m&d=../nucleo/nucleos.php");
	}
	else{	
		if ($extension != 'NULL') { #si extencion es != a NULL se concidera como una dependecia
		# agregar dependencia 
			mkdir("../../tmp/$carpeta",0777);

			bd_nucleos_agregar_dependencia($_POST);
			$m="Dependencia <strong>$nucleos</strong> se agregó correctamente a la lista de nucleos.";
			ir("../mensaje/mensaje.php?m=$m&d=../nucleo/nucleos.php");
		}else{
			mkdir("../../tmp/$carpeta",0777);
			bd_nucleos_agregar($_POST);
			$m="Nucleo <strong>$nucleos</strong> se agregó correctamente a la lista de nucleos.";
			ir("../mensaje/mensaje.php?m=$m&d=../nucleo/nucleos.php");
		}
	}

$m="El Nucleo <strong>$id</strong> se agregó correctamente a la lista de Nucleos.";
ir("../mensaje/mensaje.php?m=$m&d=../nucleo/nucleos.php");

#vq($id);


