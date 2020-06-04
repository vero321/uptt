<?php 
include_once APP.'/modulos/config/inicializacion.php';
verificar();
$id = $_GET['id'];
$id_usuario = $_GET['id_usuario'];
$nucleos=bd_nucleos_datos();
$smarty->assign('id_usuario',$id_usuario);
$smarty->assign('id',$id);
$smarty->assign('nucleos',$nucleos);
$smarty->display('usuarios_rol_asignar_nucleo.html');