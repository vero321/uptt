<?php 
include_once "./inicializacion.php";
verificar();
$id = $_GET['id'];
$nivel=$_GET['5ea6fd8de7329'];

if (isset($_GET['r'])) {
	# verificamos si resive algun rol para eliminar ese rol en espesifico
	$rol=$_GET['r'];
	$smarty->assign('rol',$rol);
}

$smarty->assign('nivel', $nivel);
$smarty->assign('datos', bd_usuarios_datos($id));
$smarty->display('usuarios_eliminar.html');