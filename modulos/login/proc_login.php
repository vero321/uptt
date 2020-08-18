<?php

define('MOD', 'login'); 
require_once '../config/app.php';
require_once APP. '/modulos/config/inicializacion.php';


#$login=limpiar_texto($_POST['login'],'email');
$login=$_POST['login'];
$clave=($_POST['clave']);
$hash=bd_usuarios_hash($login);
$temporal=bd_usuarios_hash_temporal($login);
$hash2=$temporal['clave_temporal'];
$plazo=$temporal['plazo'];


$actual=date('Y-m-d-H-i');



if ((password_verify($clave,$hash)) or ( (password_verify($clave,$hash2) ) && ( $actual<= $plazo ))){
	# code...
	$datos0=bd_usuarios_datos($login);
	$id=$datos0['id'];
	$datos1=bd_personas_datos($id);
	$datos2=bd_usuarios_roles_datos($id);
	
	foreach ($datos2 as $rol) {
		# agreamos nucleo y pnf a cada rol
		if (isset($rol['id_nucleo']) == true) {
			# code...
			$nucleo=bd_nucleos_datos($rol['id_nucleo']);
			$rol['nucleo']=$nucleo['nombre_corto'];
		}if (isset($rol['id_pnf'])){
			# code...
			$pnf= bd_pnf_datos($rol['id_pnf']);
			$rol['pnf']=$pnf['nombre_corto'];
		}
		$datos_roles[]=$rol;
	}
	$_SESSION['u']=$datos0;
	$_SESSION['r']=$datos_roles;
	$n=count($datos2);
	for ($i=0; $i < $n; $i++) { 
		# code...
		$rol=$datos2[$i]['id_rol'];
		$privilegios=bd_roles__privilegios($rol);
		#vq($privilegios);
		$_SESSION[$rol]=$privilegios;

	}
	#$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
	#vq($_SESSION);


	ir('../inicio/inicio_interno.php');


}
else{
	$m="Error al ingresar verifique sus datos ";
	ir("../mensaje/mensaje_ingreso.php?m=$m&d=../inicio/inicio.php");
}