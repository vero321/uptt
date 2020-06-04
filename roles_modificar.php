<?php
include_once APP.'/modulos/config/inicializacion.php';
verificar();
$id = $_GET['id'];
$rol=bd_roles_datos($id);
$smarty->assign('rol', $rol);
$smarty->display('roles_modificar.html');