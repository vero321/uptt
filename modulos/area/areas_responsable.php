<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

/* Responsable de un Area de Trabajo, para definirlos como Cómite Técnico.
 Recibe dos parametros: El ID del Area y la cedula correspondiente al usuario.
 Luego busca un rol y lo asigna.
 */




#Esta estructura busca el rol que tenga el privilegio de asignar nucleo (PNNU_R)
#para ello usa dos foreach el primero para roles buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (PNNU_R) lo cual indica que puede ser responsable de un Nucleo
$id_area=$_GET['id'];
$roles=bd_roles_datos();
foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "AREA_R") {
			$id_rol=$privilegio['id_rol'];
		}
	}
}
if (!isset($id_rol)) {
	# code...
	$respuesta=1;
    $smarty->assign('respuesta',$respuesta);
}
#Este archivo tambien funciona para cambiar el responsable 
#si la variable cambiar esta definida elimina el ROL responble actual y limpia el campo esponsable de la tabla NUCLEOS
if (isset($_GET['cambiar']) ) {
	# code...
	$id_usuario = $_GET['cambiar'];
	bd_area_responsable_cambiar($id_area,$id_rol,$id_usuario);
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
	bd_area_responsable($id_area,$id_rol,$id_usuario);
	$m="Usuario asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../area/areas.php");
}

$smarty->assign('areas', bd_areas_datos($id_area));
$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));

$smarty->display('areas_responsable.html');