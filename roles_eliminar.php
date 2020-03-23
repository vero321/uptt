<?php 
include_once "./inicializacion.php";

$id = $_GET['id'];
$rol=bd_roles_datos($id);
$smarty->assign('datos', $rol);
$smarty->display('roles_eliminar.html');