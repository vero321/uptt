<?php
require_once './inicializacion.php';

	$pnf = $_POST['nombre_corto'];

	$sql="SELECT nombre_largo
	            FROM pnf
	            WHERE nombre_largo LIKE '{$_POST['nombre_largo']}' and nombre_corto LIKE 
	            '{$_POST['nombre_corto']}' ";
	        $verificacion = sql2row($sql);
	if ($verificacion > 0){
		$m="PNF <strong>$pnf</strong> El PNF ya esta Registrado con exito.";
		ir("mensaje.php?m=$m&d=pnf.php");
	}
	else{
		bd_pnf_agregar($_POST);
		$m="PNF <strong>$pnf</strong> se agregó correctamente a la lista de PNF.";
		ir("mensaje.php?m=$m&d=pnf.php");
	}


$m="El PNF <strong>$id</strong> se agregó correctamente a la lista de PNF.";
ir("mensaje.php?m=$m&d=pnf.php");
#vq($id);


