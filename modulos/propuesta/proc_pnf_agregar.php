<?php
define('MOD', 'pnf'); 
require_once '../config/app.php';
require_once APP."/modulos/config/inicializacion.php";

	$pnf = $_POST['nombre_corto'];

	$sql="SELECT nombre_largo
	            FROM PNF
	            WHERE nombre_largo LIKE '{$_POST['nombre_largo']}' and nombre_corto LIKE  '{$_POST['nombre_corto']}' ";
	        $verificacion = sql2row($sql);
	if ($verificacion > 0){
		$m="PNF <strong>$pnf</strong> registrado con exito.";
		ir(APP."../mensaje/mensaje.php?m=$m&d=../pnf/pnf.php");
	}
	else{
		bd_pnf_agregar($_POST);
		$m="PNF <strong>$pnf</strong> se agregó correctamente a la lista de PNF.";
		ir("../mensaje/mensaje.php?m=$m&d=../pnf/pnf.php");
	}


$m="El PNF <strong>$id</strong> se agregó correctamente a la lista de PNF.";
ir("../mensaje/mensaje.php?m=$m&d=../pnf/pnf.php");
#vq($id);


