<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();

#Esta pagina busca Un usuario para Asignarlo como Estudiante e integrarlo a un equipo
#Recibe un parametro
#El primero es la ID del la seccion, 'id'
#Luego busca un rol y lo asigna


#Esta estructura busca el rol que tenga el privilegio que lo identifique como  estudiante (ESTU_E)
#para ello usa dos foreach el primero para roles buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (ESTU_E) lo cual indica que es un Estudiante

$id=$_GET['id'];

$roles=bd_roles_datos();

foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "ESTU_E") {
			$id_rol=$privilegio['id_rol'];
		}
	}
}
if (!isset($id_rol)) {
	# code...
	$respuesta=1;
    $smarty->assign('respuesta',$respuesta);
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
	$equipo=bd_equipo_lider($id);
	$numero_integrantes=$equipo['numero_integrantes']+1;
	bd_agregar_integrante($id,$id_rol,$id_usuario,$numero_integrantes);
	$m="seccion asignada con exito";
    ir("equipo.php?id=".$id);
}


$smarty->assign('id',$id);
$smarty->display('agregar_integrante.html');