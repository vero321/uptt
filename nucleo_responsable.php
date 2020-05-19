<?php 
include_once "./inicializacion.php";
$verificar=verificar();

#vq($_POST);
$smarty->assign('verificar',$verificar);
# Busqueda
# Lista de usuario
$id_nucleo=$_GET['id'];
if( isset( $_REQUEST['p'] ) ){
	# Muestra los resultados de la busqueda
    $usuarios=bd_usuarios_datos3('USUARIOS.id,correo',$_REQUEST['p'],$datos_por_pagina=1000, $rol=NULL, $nucleo=NULL,$pnf=NULL,$nivel=1000);
    $smarty->assign('usuarios',$usuarios);
} 
# lista de roles de usuario
if ( isset($_POST['id_usuario']) and !isset($_POST['id_rol'])) {
	# code..
	$roles=bd_usuarios_roles_datos($_POST['id_usuario']);
    $smarty->assign('id_usuario',$_POST['id_usuario']);
    $smarty->assign('roles',$roles);
}
# Asignacion
if (isset($_POST['id_rol'])){
	# code...
	$id_rol=$_POST['id_rol'];
	$id_usuario=$_POST['id_usuario'];
	bd_nucleo_responsable($id_nucleo,$id_rol,$id_usuario);
}

$smarty->assign('nucleos', bd_nucleos_datos($id_nucleo));
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));

$smarty->display('nucleo_responsable.html');