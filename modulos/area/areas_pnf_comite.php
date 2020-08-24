<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Esta pagina busca Un usuario para Asignarlo como Comite Técnico
#Recibe Dos parametros 
#El primero es la ID del la seccion, 'S'
#El segundo es el numero de cedula o de correo del usuario
#Luego busca un rol y lo asigna


#Esta estructura busca el rol que tenga el privilegio de asignar comite (COMI_T)
#para ello usa dos foreach el primero para roles buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (COMI_T) lo cual indica que puede ser professor de proyecto

$id_area=$_GET['id'];

$roles=bd_roles_datos();

foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "COMI_T") {
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
	bd_comite_tecnico_cambiar($id_area,$id_rol,$id_usuario);
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
	bd_asignar_comite_tecnico($id_area,$id_rol,$id_usuario);
	$m="Usuario asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../area/areas_pnf.php");
}

$smarty->assign('areas_pnf', bd_areas_datos($id_area));
$smarty->display('areas_pnf_comite.html');