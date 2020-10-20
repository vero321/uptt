<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Esta pagina busca Un usuario para Asignarlo como Profesor de proyecto
#Recibe Dos parametros 
#El primero es la ID del la seccion, 's'
#El segundo numero de cedula o de correo del usuario
#Luego busca un rol y lo asigna

#tambien recive la id trayecto para regresar a el trayecto correspondiente 't'


#Esta estructura busca el rol que tenga el privilegio de asignar nucleo (PROF_P)
#para ello usa dos foreach el primero para roles buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (PROF_P) lo cual indica que puede ser professor de proyecto

$id_seccion=$_GET['id'];
$id_trayecto=$_GET['t'];


$roles=bd_roles_datos();

foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "PROF_P") {
			$id_rol=$privilegio['id_rol'];

		}
	}
}
if (!isset($id_rol)) {
	# code...
	$respuesta=1;
    $smarty->assign('respuesta',$respuesta);
}
#Este archivo tambien funciona para cambiar el profesor de proyecto
#si la variable cambiar esta definida elimina el ROL responble actual y limpia el campo profesor_proyecto

if (isset($_GET['cambiar']) ) {
	# code...
	$id_usuario = $_GET['cambiar'];
	bd_profesor_proyecto_cambiar($id_seccion,$id_rol,$id_usuario);
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
	bd_asignar_profesor_proyecto($id_seccion,$id_rol,$id_usuario);
	$m="seccion asignada con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../secciones/secciones.php?t=$id_trayecto");
} 	


$smarty->assign('seccion', bd_secciones_datos($id_seccion));
$smarty->assign('id_trayecto', $id_trayecto);
$smarty->display('seccion_profesor.html');