<?php
include_once "./inicializacion.php";
verificar();

$id=$_GET['id'];
$rol=bd_roles_datos($id);
$privilegios=bd_roles__privilegios($id);
$smarty->assign('rol', $rol);
$smarty->assign('privilegios', $privilegios);
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('roles_datos.html');