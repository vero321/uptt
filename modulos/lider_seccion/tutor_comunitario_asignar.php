<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Esta pagina busca Un usuario para Asignarlo como Tutor Comunitario
#Recibe Tres parametros 
#El primero es la ID del la seccion, este se utiliza para retornar al usuario en la seccion correspondiente
#el segundo es la ID del equipo 
#El Tercero numero de cedula o de correo del usuario
#Luego busca un rol y lo asigna


$seccion=$_GET['seccion'];
$smarty->assign('seccion', $seccion);

$equipo=$_GET['equipo'];
$smarty->assign('equipo', $equipo);




$roles=bd_roles_datos();

#Esta estructura busca el rol que tenga el privilegio de asignar nucleo (TUTO_ACO)
#para ello usa dos foreach el primero para roles buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (TUTO_ACO) lo cual indica que puede ser Tutor Académico
foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "TUTO_ACO") {
			$id_rol=$privilegio['id_rol'];

		}
	}
}
if (!isset($id_rol)) {
	# code...
	$respuesta=1;
    $smarty->assign('respuesta',$respuesta);
}
#Este archivo tambien funciona para cambiar el Tutor Académico
#si la variable cambiar esta definida elimina el ROL responble actual y limpia el campo tutor_academico

if (isset($_GET['cambiar']) ) {
	# code...
	$id_usuario = $_GET['cambiar'];
	bd_tutor_comnitario_cambiar($equipo,$id_rol,$id_usuario);
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
	bd_asignar_tutor_comunitario($equipo,$id_rol,$id_usuario);
	$m="Tutor Académico asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../lider_seccion/lideres.php?id=$seccion");
} elseif (isset($_POST['id_usuario']) and !isset($_POST['id_rol']) ) {
	# Este paso Asigna la seccion al Tutor Académico sin 
	# asignarle nuevamente el rol a la persona
	$m="Tutor Académico asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../lider_seccion/lideres.php?id=$seccion");
}


$smarty->display('tutor_comunitario_asignar.html');