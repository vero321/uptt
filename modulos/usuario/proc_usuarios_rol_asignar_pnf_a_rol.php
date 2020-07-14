<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$pnf=$_POST['pnf'];

$id=$_POST['id'];
$id_usuario=$_POST['id_usuario'];

$sql="
	UPDATE USUARIOS__ROLES SET
		id_pnf = '{$pnf}'
	WHERE id = '{$id}'
    ";
sql($sql);


$m="PNF asignado con exito";
ir("../mensaje/mensaje.php?m=$m&d=../usuario/usuarios_roles.php?id=$id_usuario");
