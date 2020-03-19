<?php
require_once './inicializacion.php';


#$login=limpiar_texto($_POST['login'],'email');
$login=$_POST['login'];
$clave=($_POST['clave']);
$hash=bd_usuarios_hash($login);
$temporal=bd_usuarios_hash_temporal($login);
$hash2=$temporal['clave_temp'];
$plazo=$temporal['plazo'];

$actual=date('Y-m-d-H-i');



if ((password_verify($clave,$hash)) or ( (password_verify($clave,$hash2) ) && ( $actual<= $plazo ))){
	# code...
	$datos=bd_usuarios_datos($login);
	$id=$datos['id'];
	$datos2=bd_usuarios_roles_datos($id);
	$_SESSION['u']=$datos;
	$_SESSION['p']=$datos2;
	$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

	ir('inicio_interno.php');


}
else{
	$m="Error al ingresar verifique sus datos ";
	ir("mensaje.php?m=$m&d=index.php");
}