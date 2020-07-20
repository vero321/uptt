<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

#Esta pagina busca Un usuario para Asignarlo como Responsable de un PNF
#Recibe tres parametros 
#El primero es la ID del De la relación NUCLEO__PNF,
#El segundo ID del PNF que se desea Asignar
#Por ultimo numero de cedula o de correo del usuario
#Luego busca un rol y lo asigna

$id_relacion=$_GET['id_relacion'];
$id_pnf=$_GET['id_pnf'];
$id_nucleo=$_GET['id_nucleo'];

$pnf=bd_pnf_datos($id_pnf);

#Esta estructura busca el rol que tenga el privilegio de asignar PNF (PNF_R)
#para ello usa dos foreach el primero para buscar los datos de los Roles
#el segundo busca entre los privilegios este privilegio (PNF_R) lo cual indica que puede ser PNF de un Nucleo
$roles=bd_roles_datos();
foreach ($roles as $rol) {
	# code...
	$privilegios=bd_roles__privilegios($rol['id']);
	foreach ($privilegios as $privilegio) {
		if ($privilegio['codigo'] == "PNF_R") {
			$id_rol=$privilegio['id_rol'];
		}
	}
}
#Este archivo tambien funciona para cambiar el responsable 
#si la variable cambiar esta definida elimina el ROL responble actual y limpia el campo esponsable de la tabla PNF
if (isset($_GET['cambiar'])) {
	# code...
	$id_usuario = $_GET['cambiar'];
	bd_pnf_nucleo_responsable_cambiar($id_usuario, $id_rol,$id_nucleo, $id_pnf, $id_relacion);

}

if( isset( $_REQUEST['buscar'] ) ){
	# Muestra los resultados de la busqueda
    $usuarios=bd_usuarios_datos1('USUARIOS.id,correo',$_REQUEST['buscar']);
    $smarty->assign('usuarios',$usuarios);
} 

if (!isset($id_rol)) {
	# code...
	$respuesta=1;
	$smarty->assign('respuesta',$respuesta);
}

# Asignacion
if (isset($_POST['id_usuario']) and !isset($_POST['id_relacion']) and !isset($_POST['id_pnf']) ){
	#Este paso Asigna el rol a la persona
	$id_usuario=$_POST['id_usuario'];
	bd_pnf_nucleo_responsable($id_usuario, $id_rol,$id_nucleo, $id_pnf, $id_relacion);
	$m="PNF asignado con exito";
    ir("../mensaje/mensaje.php?m=$m&d=../pnf_nucleo/pnf_nucleo.php");
}


$smarty->assign('id_relacion',$id_relacion);
$smarty->assign('pnf',$pnf);
$smarty->assign('id_nucleo',$id_nucleo);
$smarty->display('pnf_nucleo_responsable.html');