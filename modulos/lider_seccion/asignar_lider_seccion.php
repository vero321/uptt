<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$roles=bd_roles_datos();

foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "LIDE_E") {
			$id_rol=$privilegio['id_rol'];
		}
	}
}
if (!isset($id_rol)) {
	
	$respuesta=1;
    $smarty->assign('respuesta',$respuesta);
}

#Este archivo tambien funciona para cambiar al usuario con el rol de comite técnico. Si la variable cambiar esta definida elimina el ROL responsable actual y limpia el campo comite_tecnico

if (isset($_GET['cambiar']) ) {
	# code...
	$id_usuario = $_GET['cambiar'];
	bd_lider_equipo_cambiar($id_seccion, $id_rol,$id_usuario);
}

# Busqueda
# Lista de usuario
if( isset( $_REQUEST['p'] ) ){
	# Muestra los resultados de la busqueda
    $usuarios=bd_usuarios_datos1('USUARIOS.id,correo',$_REQUEST['p']);
    $smarty->assign('usuarios',$usuarios);
} 


# Asignacion
if (isset($_POST['id_usuario']) and !isset($_POST['id_rol']) ){
	#Este paso Asigna el rol a la persona
	$id_usuario=$_POST['id_usuario'];
	bd_asignar_lider_equipo($id_seccion,$id_rol,$id_usuario);
	$m="Usuario asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../lider_seccion/lider_seccion.php");
}


$smarty->display('asignar_lider_seccion.html');