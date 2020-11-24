<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Esta pagina busca Un usuario para Asignarlo como Lider de Equipo
#Recibe Dos parametros 
#El primero es la ID de la seccion, 'seccion'
#El segundo es el ID del Equipo
#Luego busca un rol y lo asigna



$seccion = $_GET['seccion'];
$equipo = $_GET['equipo'];
$smarty->assign('equipo',$equipo);
$smarty->assign('seccion',$seccion);
#vq($_GET);

#Esta estructura busca el rol que tenga el privilegio de asignar Líder (PROF_AL)
#para ello usa dos foreach el primero para roles buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (LIDE_EQ) lo cual indica que puede ser Líder de Equipo

$roles=bd_roles_datos();

foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "LIDE_EQ") {
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
	$id_equipo = $_GET['equipo'];
	$id_usuario = $_GET['cambiar'];
	bd_lider_equipo_cambiar($id_equipo, $id_rol, $id_usuario);
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
	bd_asignar_lider_equipo($id_usuario,$id_rol,$seccion,$equipo);
	$m="Usuario asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../lider_seccion/lideres.php?id=".$seccion);
}

$smarty->assign('id_rol',$id_rol);
$smarty->display('lider_asignar1.html');