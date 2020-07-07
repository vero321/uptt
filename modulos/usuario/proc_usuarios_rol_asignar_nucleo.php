<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$nucleo=$_POST['nucleo'];

$id=$_POST['id'];
$id_usuario=$_POST['id_usuario'];


$sql="
	UPDATE USUARIOS__ROLES SET
		id_nucleo = '{$nucleo}'
	WHERE id = '{$id}'
    ";
sql($sql);

$m="Nucleo asignado con exito";
ir("../../mensaje.php?m=$m&d=modulos/usuario/usuarios_roles.php?id=$id_usuario");
