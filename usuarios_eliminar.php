<?php 
include_once "./inicializacion.php";

$id = $_GET['id'];

$smarty->assign('d', bd_usuarios_datos($id));
$smarty->display('usuarios_eliminar.html');